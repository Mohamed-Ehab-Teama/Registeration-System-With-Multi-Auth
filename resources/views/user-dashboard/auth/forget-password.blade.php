@extends('user-dashboard.auth.master')

@section('title', 'Reset Passowrd')


@section('content')


    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('password.email') }}">
        @csrf

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
            <h2 class="my-3">Forget Password</h2>
        </div>

        <p class="text-muted">Enter your email address and we'll send you an email with instructions to reset your password
        </p>

        {{-- Email --}}
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address"
                required="" autofocus="" name="email" :value="old('email')">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>

        <p class="mt-5 mb-3 text-muted">© Mohamed Eha Teama</p>
    </form>

@endsection
