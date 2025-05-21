@extends('admin-dashboard.master');

@section('title', 'Show Role')
@section('roles-active', 'active')


@section('content')



    <div class="col-12">
        <h2 class="page-title">View Role</h2>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="simpleinput">Name</label>
                            <input disabled class="form-control" value="{{ $role->name }}">
                        </div>

                        <div class="form-group col-12">
                            <div class="row">
                                @if (count($permissions) > 0)
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-6">
                                            <div class="form-check form-check-primary mt-1">
                                                <input class="form-check-input" type="checkbox" disabled
                                                    @checked($role->hasPermissionTo($permission->name))>
                                                <div class="d-inline-block">
                                                    <label class="form-check-label">{{ $permission->name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
