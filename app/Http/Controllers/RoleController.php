<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin-dashboard.roles.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::where('guard_name', 'admin')->get();
        return view('admin-dashboard.roles.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $roleData = $request->validated();
        // dd($roleData);
        $role = Role::create(['name' => $roleData['name'], 'guard_name' => 'admin']);
        if (isset($roleData['permissionsArray'])) {
            foreach ($roleData['permissionsArray'] as $permission => $value) {
                $role->givePermissionTo($permission);
            }
        }
        return to_route('admins.roles.index')->with('success', "Role Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        // dd($role);
        $permissions = Permission::all();
        return view('admin-dashboard.roles.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::where('guard_name', 'admin')->get();
        return view('admin-dashboard.roles.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRoleRequest $request, Role $role)
    {
        $roleData = $request->validated();
        // dd($roleData);
        $role->update(['name' => $roleData['name']]);
        $role->syncPermissions();
        if (isset($roleData['permissionsArray'])) {
            foreach ($roleData['permissionsArray'] as $permission => $value) {
                $role->givePermissionTo($permission);
            }
        }
        return to_route('admins.roles.index')->with('success', "Role Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return to_route('admins.roles.index')->with('success', "Role Deleted Successfully");
    }
}
