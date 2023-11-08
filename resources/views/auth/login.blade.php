{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('master')

@section('content')
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 ">
                <div class="card my-5">
                    {{-- <h3 class="text-success text-center">{{Session::get('registration-message') }}</h3> --}}
                    <form class="card-body p-lg-5" action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                                  alt="profile"
                            style="width:120px; height:120px; object-fit:cover;"
                            >
                            <h4 class="fw-bold my-2">Sign in here</h4>
                        </div>

                        <div class="mb-3 mt-3">
                            <input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp"
                                   placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-1 w-100 btn-success text-uppercase fw-bold">Login</button>
                        </div>
                        <small class="text-danger">
                            {{-- {{Session::get('message') }} --}}
                        </small>
                        <div id="emailHelp" class="form-text text-center mb-2 text-dark">Don't have an account? <a href="{{route('register')}}" class="text-dark fw-bold"> Create an
                                Account</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection