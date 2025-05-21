@extends('admin-dashboard.master');

@section('title', 'Edit Role')
@section('roles-active', 'active')


@section('content')


    <form action="{{ route('admins.roles.update', ['role' => $role]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-12">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('success')" />

            <h2 class="page-title">Edit Role</h2>

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label for="simpleinput">Name</label>
                                <input type="name" name="name" value="{{ $role->name }}" id="simpleinput"
                                    class="form-control">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Permissions -->
                            @if (count($permissions) > 0)
                                @foreach ($permissions as $permission)
                                    <div class="form-check form-check-primary my-3">
                                        <input class="form-check-input" type="checkbox" id="permission{{ $permission->id }}"
                                            @checked($role->hasPermissionTo($permission->name)) name="permissionsArray[{{ $permission->name }}]">
                                        <div class="d-inline-block">
                                            <label for="permission{{ $permission->id }}" class="form-check-label">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <!-- Button -->
                            <button type="submit" class="btn btn-primary"> Update </button>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </form>

@endsection
