@extends('layouts.app')

@section('content')
<section class="container mx-auto">
    <h1>{{ __('Login') }}</h1>

    <form method="POST" action="{{ route('login') }}" class="p-4 border bg-white">
        @csrf

        <div class="form__group">
            <label for="email" class="col-md-4 w-full sm:w-1/3 flex justify-start sm:justify-end px-0 sm:px-2">{{ __('E-Mail Address') }}</label>

            <div class="w-full sm:w-1/2">
                <input id="email" type="email" class="form__control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form__group">
            <label for="password" class="col-md-4 w-full sm:w-1/3 flex justify-start sm:justify-end px-0 sm:px-2">{{ __('Password') }}</label>

            <div class="w-full sm:w-1/2">
                <input id="password" type="password" class="form__control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="flex flex-row sm:form__group mt-8">
            <div class="sm:ml-auto sm:w-2/3 flex justify-start items-center">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="mb-0 ml-2 sm:ml-0 sm:w-1/2 px-0 sm:px-2" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="flex flex-row sm:form__group mt-8">
            <div class="sm:ml-auto sm:w-2/3">
                <button type="submit" class="btn btn--blue btn--pill">
                    {{ __('Login') }}
                </button>

                <a class="ml-4" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </div>
    </form>
</section>
@endsection
