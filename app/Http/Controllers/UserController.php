<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{

    public function dash()
    {
        return view('user-dashboard.index');
    }

    // --------------- ========================== ---------------------------------- //

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin-dashboard.users.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-dashboard.users.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $userData = $request->validated();
        $user = User::create($userData);
        return to_route('admins.users.index')->with('success', "User Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // dd($admin);
        return view('admin-dashboard.users.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin-dashboard.users.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // dd($user);
        $userData = $request->validated();
        if ($userData['password'] == null) {
            unset($userData['password']);
        }
        $user->update($userData);
        return to_route('admins.users.index')->with('success', "User Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admins.users.index')->with('success', "User Deleted Successfully");
    }
}
