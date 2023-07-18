<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\User\UserRequest;
use App\Models\Role;
use App\Models\User;
use App\Repositories\dashboard\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->middleware(['auth', 'checkRole']);
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::query()->where('role_id', '<>', auth()->user()->role_id);
            try {
                $data->get();

                return datatables($data)
                    ->addColumn('checkbox', function ($item) {
                        return '<input type="checkbox" id="'.$item->id.'" name="someCheckbox" />';
                    })->addColumn('role', function ($item) {
                        return $item->role->name;
                    })
                    ->addColumn('action', function ($item) {
                        return '<div class="activity-icon">
                     <ul style="list-style: none">
                        <li><a id="delete" data-user="'.$item->id.'" data-url="'.route('users_delete').'" class=""><i class="mdi mdi-trash-can"></i></a></li>
                        <li><a  href="'.route('users.edit', $item->id).'" class=""><i class="mdi mdi-grease-pencil"></i></a></li>
                        <li><a  href="'.route('users.show', $item->id).'" class=""><i class="mdi mdi-eye"></i></a></li>
                     </ul>
                </div>';
                    })->rawColumns(['checkbox', 'role', 'action'])->make(true);
            } catch (\Exception $e) {
                return new GeneralException($e);
            }
        }

        return view('dashboard.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = Role::all();

        return view('dashboard.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $this->userRepository->create($request->all());
        session()->flash('success', 'User has been added successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('dashboard.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userRepository->update($request->all(), $user);
        session()->flash('success', 'User has been updated successfully!');

        return redirect()->back();
    }

    public function delete_user(Request $request)
    {
        $this->userRepository->destroy($request->id);
        session()->flash('success', 'User has been deleted successfully!');
    }
}
