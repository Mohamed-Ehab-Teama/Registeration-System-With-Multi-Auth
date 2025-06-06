@extends('user-dashboard.auth.master')

@section('title', 'Login')


@section('content')



    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

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
        <h1 class="h6 mb-3">Sign in</h1>

        {{-- Email --}}
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address"
                required="" autofocus="" name="email" :value="old('email')">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Passowrd --}}
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password"
                required="" name="password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Remember Me --}}
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> Stay logged in </label>
        </div>

        <button class="mb-3 btn btn-lg btn-primary btn-block" type="submit">Log In</button>

        {{-- Forget Password ? --}}
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>

        <p class="mt-5 mb-3 text-muted">© Mohamed Ehab Teama</p>
    </form>

@endsection
