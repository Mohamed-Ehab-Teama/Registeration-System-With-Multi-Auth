@extends('admin-dashboard.master');

@section('title', 'All Admins')
@section('admins-active', 'active')


@section('content')


    <!-- simple table -->
    <div class="col-md-12 my-4">

        {{-- Add New Admin --}}
        <div class="text-right my-3">
            <a href="#" class="btn btn-primary text-white"> Add New </a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title"> All Admins </h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            {{-- <th>Role</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($admins) > 0)
                            @foreach ($admins as $admin)
                                <tr>
                                    <td> {{ $admin->name }} </td>
                                    <td> {{ $admin->email }} </td>
                                    {{-- <td><span class="badge badge-pill badge-warning"> 
                                        {{$admin->name}} 
                                    </span></td> --}}
                                    <td>
                                        Actions
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
