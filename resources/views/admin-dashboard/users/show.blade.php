@extends('admin-dashboard.master');

@section('title', 'Show User')
@section('users-active', 'active')


@section('content')



    <div class="col-12">
        <h2 class="page-title">View User</h2>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="simpleinput">Name</label>
                            <input disabled class="form-control" value="{{ $user->name }}">
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="example-email">Email</label>
                            <input disabled class="form-control" value="{{ $user->email }}">
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
