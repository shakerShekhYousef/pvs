<?php

namespace App\Http\Controllers\dashboard;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\Car\CreateCarRequest;
use App\Http\Requests\dashboard\Car\UpdateCarRequest;
use App\Models\Car;
use App\Models\CarImage;
use App\Repositories\dashboard\CarRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->middleware('auth');
        $this->carRepository = $carRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Car::query()->latest();
            try {
                $search = $request->get('search');
                if (auth()->user()->role->name == 'Admin') {
                    $data->where('maker', 'like', '%'.request('search').'%')
                        ->orWhere('model', 'like', '%'.request('search').'%')
                        ->orWhere('year', 'like', '%'.request('search').'%')
                        ->orWhere('price_aed', 'like', '%'.request('search').'%')
                        ->orWhere('price_africa', 'like', '%'.request('search').'%')
                        ->get();

                    return datatables($data)
                        ->addColumn('checkbox', function ($item) {
                            return '<input type="checkbox" id="'.$item->id.'" name="someCheckbox" />';
                        })->editColumn('image', function ($item) {
                            return '<img src="'.asset('storage/'.$item->main_image).'" width="100px" />';
                        })->addColumn('action', function ($item) {
                            return '<div class="activity-icon">
                     <ul style="list-style: none">
                        <li><a id="delete" data-car="'.$item->id.'" data-url="'.route('cars_delete').'" class=""><i class="mdi mdi-trash-can"></i></a></li>
                        <li><a  href="'.route('cars.edit', $item->id).'" class=""><i class="mdi mdi-grease-pencil"></i></a></li>
                        <li><a  href="'.route('cars.show', $item->id).'" class=""><i class="mdi mdi-eye"></i></a></li>
                     </ul>
                </div>';
                        })->rawColumns(['checkbox', 'image', 'action'])->make(true);
                } else {
                    $data->where('maker', 'like', '%'.request('search').'%')
                        ->orWhere('model', 'like', '%'.request('search').'%')
                        ->orWhere('year', 'like', '%'.request('search').'%')
                        ->orWhere('price_dealer_aed', 'like', '%'.request('search').'%')
                        ->orWhere('price_dealer_africa', 'like', '%'.request('search').'%')
                        ->get();

                    return datatables($data)
                        ->addColumn('checkbox', function ($item) {
                            return '<input type="checkbox" id="'.$item->id.'" name="someCheckbox" />';
                        })->editColumn('image', function ($item) {
                            return '<img src="'.asset('storage/'.$item->main_image).'" width="100px" />';
                        })->editColumn('price', function ($item) {
                            return set_price($item);
                        })->rawColumns(['checkbox', 'price', 'image'])->make(true);
                }
            } catch (\Exception $e) {
                return new GeneralException($e);
            }
        }

        return view('dashboard.cars.index');
    }

    public function create()
    {
        return view('dashboard.cars.create');
    }

    public function store(CreateCarRequest $request)
    {
        $this->carRepository->create($request->all());
        session()->flash('success', 'Car has been added successfully!');

        return redirect()->back();
    }

    public function show(Car $car)
    {
        return view('dashboard.cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('dashboard.cars.edit', compact('car'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $this->carRepository->update($request->all(), $car);
        session()->flash('success', 'Car has been updated successfully!');

        return redirect()->back();
    }

    /**
     * @throws GeneralException
     */
    public function delete_car(Request $request)
    {
        $this->carRepository->destroy($request->id);
        session()->flash('success', 'Car has been deleted successfully!');
    }

    public function delete_car_image(Request $request)
    {
        $image = CarImage::findOrFail($request->id);
        DB::transaction(function () use ($image) {
            unlink(public_path('storage/'.$image->image_url));
            $image->delete();

            return true;
        });
    }
}
