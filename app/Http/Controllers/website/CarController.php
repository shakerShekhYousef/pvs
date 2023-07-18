<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //Return Show Room
    public function show_room()
    {
        //get location
        $ip = request()->getClientIp() == '127.0.0.1' ? '103.244.134.0' : request()->getClientIp();
        $location = \Stevebauman\Location\Facades\Location::get($ip);
        $country = $location == false ? 'AE' : $location->countryCode;
        $price_column = $country == 'AE' ? 'price_aed' : 'price_africa';
        $cars = Car::query()->orderBy($price_column, 'desc')->paginate(10);
        $makers = Car::query()->select('maker')->distinct()->get();

        return view('website.showRoom', compact('cars', 'makers'));
    }

    //Return Car Details
    public function car_details($maker, $model, $year, $slug)
    {
        $car = Car::query()->where('slug', $slug)->first();
        $images = $car->images;

        return view('website.car-details', compact('car', 'images'));
    }

    //Return Model
    public function car_models(Request $request)
    {
        $models = Car::query()->where('maker', 'like', '%'.$request->maker.'%')->select('model')->distinct()->get();

        return response()->json([
            'models' => $models,
        ]);
    }

    //Search
    public function car_search(Request $request)
    {
        $price_order = isset($request->price_order) ? $request->price_order : 'desc';
        //get location
        $ip = request()->getClientIp() == '127.0.0.1' ? '103.244.134.0' : request()->getClientIp();
        $location = \Stevebauman\Location\Facades\Location::get($ip);
        $country = $location == false ? 'AE' : $location->countryCode;
        $price_column = $country == 'AE' ? 'price_aed' : 'price_africa';
        if ($request->maker != 'null') {
            $cars = Car::query()->maker($request->maker)->model($request->model)->orderBy($price_column, $price_order)->paginate(10);
        } else {
            $cars = Car::query()->orderBy($price_column, $price_order)->paginate(10);
        }
        $makers = Car::query()->select('maker')->distinct()->get();

        return view('website.showRoom', compact('cars', 'makers'));
    }

    //Search by logo
    public function logo_search($maker)
    {
        //get location
        $ip = request()->getClientIp() == '127.0.0.1' ? '103.244.134.0' : request()->getClientIp();
        $location = \Stevebauman\Location\Facades\Location::get($ip);
        $country = $location == false ? 'AE' : $location->countryCode;
        $price_column = $country == 'AE' ? 'price_aed' : 'price_africa';
        $makers = Car::query()->select('maker')->distinct()->get();
        $cars = Car::query()->maker($maker)->orderBy($price_column, 'desc')->paginate(10);

        return view('website.showRoom', compact('cars', 'makers'));
    }
}
