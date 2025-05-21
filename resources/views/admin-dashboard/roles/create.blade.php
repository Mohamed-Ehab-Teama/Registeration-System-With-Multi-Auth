@extends('admin-dashboard.master');

@section('title', 'Add New Role')
@section('roles-active', 'active')


@section('content')


    <form action="{{ route('admins.roles.store') }}" method="POST">
        @csrf

        <div class="col-12">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('success')" />

            <h2 class="page-title">Add New Role</h2>

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label for="simpleinput">Name</label>
                                <input type="name" name="name" value="{{ old('name') }}" id="simpleinput"
                                    class="form-control">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>


                            <!-- Permissions -->
                            @if (count($permissions) > 0)
                                @foreach ($permissions as $permission)
                                    <div class="form-check form-check-primary my-2">
                                        <input type="checkbox" name="permissionsArray[{{$permission->name}}]"
                                            id="permission{{ $permission->id }}" class="form-check-input">
                                        <label class="form-check-label" for="permission{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach
                            @endif



                            <!-- Button -->
                            <button type="submit" class="btn btn-primary"> Add New </button>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </form>

@endsection
