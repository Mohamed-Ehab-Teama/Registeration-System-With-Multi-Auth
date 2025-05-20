@extends('admin-dashboard.master');

@section('title', 'Edit Admin')
@section('admins-active', 'active')


@section('content')


<form action="{{ route('admins.admins.update', ['admin' => $admin]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="col-12">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('success')" />

        <h2 class="page-title">Edit Admin</h2>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="simpleinput">Name</label>
                            <input type="name" name="name" value="{{ $admin->name }}" id="simpleinput" class="form-control">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="example-email">Email</label>
                            <input type="email" id="example-email" class="form-control" placeholder="Email" name="email" value="{{ $admin->email }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Roles -->
                        <div class="form-group mb-3">
                            <label class="form-label"> Role: </label>
                            <select class="border form-control" name="role">
                                <option value=""> Select Role </option>
                                @if (count($roles) > 0)
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                                @endif
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label for="example-password">Password</label>
                            <input type="password" id="example-password" class="form-control" name="password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mb-3">
                            <label for="example-password">Password</label>
                            <input type="password" id="example-password" class="form-control"
                                name="password_confirmation">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Button -->
                        <button type="submit" class="btn btn-primary"> Update </button>

                    </div>

                </div>
            </div>
        </div>

    </div>

</form>

@endsection