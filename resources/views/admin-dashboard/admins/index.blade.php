@extends('admin-dashboard.master')

@section('title', 'All Admins')
@section('admins-active', 'active')


@section('content')


    <!-- simple table -->
    <div class="col-md-12 my-4">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('success')" />

        {{-- Add New Admin --}}
        <div class="text-right my-3">
            <a href="{{ route('admins.admins.create') }}" class="btn btn-primary text-white"> Add New </a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title"> All Admins </h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="w-25">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($admins) > 0)
                            @foreach ($admins as $admin)
                                <tr>
                                    <td> {{ $admin->name }} </td>
                                    <td> {{ $admin->email }} </td>
                                    <td>
                                        @if (count($admin->getRoleNames()) > 0)
                                            <span class="badge badge-pill badge-warning p-2">
                                                {{ $admin->getRoleNames()[0] ?? " " }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Show Action -->
                                        <a href="{{ route('admins.admins.show', ['admin' => $admin]) }}"
                                            class="btn btn-primary"> Show </a>

                                        <!-- Edit Action -->
                                        <a href="{{ route('admins.admins.edit', ['admin' => $admin]) }}"
                                            class="btn btn-info"> Edit </a>

                                        <!-- Delete Action -->
                                        <form class="d-inline"
                                            action="{{ route('admins.admins.destroy', ['admin' => $admin]) }}"
                                            method="POST">
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
