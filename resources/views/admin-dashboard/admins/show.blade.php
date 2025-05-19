@extends('admin-dashboard.master');

@section('title', 'Show Admin')
@section('admins-active', 'active')


@section('content')



<div class="col-12">
    <h2 class="page-title">View Admin</h2>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <!-- Name -->
                    <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input disabled  class="form-control" value="{{ $admin->name }}">
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-3">
                        <label for="example-email">Email</label>
                        <input disabled class="form-control" value="{{ $admin->email }}">
                    </div>

                    <!-- Roles -->
                    <div class="form-group mb-3">
                        <label class="form-label"> Role: </label>
                        <select disabled class="border form-control">
                            <option value="">
                                {{ $admin->role }}
                            </option>
                        </select>
                    </div>



                </div>

            </div>
        </div>
    </div>

</div>


@endsection