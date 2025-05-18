@extends('admin-dashboard.auth.master')

@section('title', 'Registration')


@section('content')




    <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('admins.register') }}">
        @csrf

        <h1 class="text-center"> Admin Auth </h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('welcome') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
            <h2 class="my-3"> SIGN UP </h2>
        </div>

        {{-- Name --}}
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" :value="old('name')" name="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Email --}}
        <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" :value="old('email')">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <hr class="my-4">
        <div class="row mb-4">
            <div class="col-md-6">

                {{-- Password --}}
                <div class="form-group">
                    <label for="inputPassword5">New Password</label>
                    <input type="password" class="form-control" id="inputPassword5" name="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Confirm Password --}}
                <div class="form-group">
                    <label for="inputPassword6">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword6" name="password_confirmation">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-6">
                <p class="mb-2">Password requirements</p>
                <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following
                    requirements: </p>
                <ul class="small text-muted pl-4 mb-0">
                    <li> Minimum 8 character </li>
                    <li>At least one special character</li>
                    <li>At least one number</li>
                    <li>Can’t be the same as a previous password </li>
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

        <p class="mt-5 mb-3 text-muted text-center">© Mohamed Ehab Teama</p>
    </form>

@endsection
