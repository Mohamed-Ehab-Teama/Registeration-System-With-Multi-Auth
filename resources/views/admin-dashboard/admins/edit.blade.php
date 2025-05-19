@extends('admin-dashboard.master');

@section('title', 'Edit Admin')
@section('admins-active', 'active')


@section('content')


<form action="" method="">

    <div class="col-12">
        <h2 class="page-title">Edit Admin</h2>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="simpleinput">Name</label>
                            <input type="name" name="name" value="{{ old('name') }}" id="simpleinput" class="form-control">
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="example-email">Email</label>
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>

                        <!-- Roles -->
                        <div class="form-group mb-3">
                            <label class="form-label"> Role: </label>
                            <select class="border form-control" name="role">
                                <option value=""> Select Role </option>
                                @if ( isset($roles) and count($roles) > 0)
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                                @endif
                            </select>
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