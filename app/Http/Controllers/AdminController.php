<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

use function Laravel\Prompts\confirm;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin-dashboard.admins.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin-dashboard.admins.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        $adminData = $request->validated();
        $admin = Admin::create($adminData);
        if (isset($adminData['role'])) {
            $admin->assignRole($adminData['role']);
        }
        return to_route('admins.admins.index')->with('success', "Admin Made Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        // dd($admin);
        return view('admin-dashboard.admins.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        $roles = Role::all();
        return view('admin-dashboard.admins.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        // dd($admin);
        $adminData = $request->validated();
        if ($adminData['password'] == null) {
            unset($adminData['password']);
        }
        $admin->update($adminData);
        // $admin->syncRoles([$adminData['role']]);
        return to_route('admins.admins.index')->with('success', "Admin Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return to_route('admins.admins.index')->with('success', "Admin Deleted Successfully");
    }
}
