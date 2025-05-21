@extends('admin-dashboard.master')

@section('title', 'All Roles')
@section('roles-active', 'active')


@section('content')


    <!-- simple table -->
    <div class="col-md-12 my-4">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('success')" />

        {{-- Add New Role --}}
        <div class="text-right my-3">
            <a href="{{ route('admins.roles.create') }}" class="btn btn-primary text-white"> Add New </a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title"> All Roles </h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="w-25">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($roles) > 0)
                            @foreach ($roles as $role)
                                <tr>
                                    <td> {{ $role->name }} </td>
                                    <td>
                                        <!-- Show Action -->
                                        <a href="{{ route('admins.roles.show', ['role' => $role]) }}"
                                            class="btn btn-primary"> Show </a>

                                        <!-- Edit Action -->
                                        <a href="{{ route('admins.roles.edit', ['role' => $role]) }}" class="btn btn-info">
                                            Edit </a>

                                        <!-- Delete Action -->
                                        <form class="d-inline"
                                            action="{{ route('admins.roles.destroy', ['role' => $role]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">
                                    <div class="alert alert-danger text-center m-1">
                                        No Data Avaliale Right Now!!
                                    </div>
                                </td>
                            </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- simple table -->

@endsection
