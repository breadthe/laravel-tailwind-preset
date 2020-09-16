@extends('layouts.app')

@section('content')
<section class="container mx-auto">
    <h1>{{ __('Login') }}</h1>

    <x-forms.form :action="route('login')" class="p-4 border bg-white">

        <x-forms.group>
            <x-forms.label for="email" required>
                {{ __('E-Mail Address') }}
            </x-forms.label>

            <div class="w-full sm:w-1/2">
                <x-forms.input id="email" type="email" name="email" required autofocus/>

                <x-forms.error field="email"/>
            </div>
        </x-forms.group>

        <x-forms.group>
            <x-forms.label for="password" required>
                {{ __('Password') }}
            </x-forms.label>


            <div class="w-full sm:w-1/2">
                <x-forms.input id="password" type="password" name="password" required/>

                <x-forms.error field="password"/>
            </div>
        </x-forms.group>

        <x-forms.group class="flex flex-row mt-8">
            <div class="w-full sm:ml-auto sm:w-2/3 flex justify-start items-center">
                <x-forms.input id="remember" type="checkbox" name="remember"/>

                <x-forms.label for="remember" class="" inline>
                    {{ __('Remember Me') }}
                </x-forms.label>
            </div>
        </x-forms.group>

        <x-forms.group class="flex flex-row mt-8">
            <div class="sm:ml-auto sm:w-2/3">
                <button type="submit" class="btn btn--blue">
                    {{ __('Login') }}
                </button>

                <a class="ml-4" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </x-forms.group>

    </x-forms.form>
</section>
@endsection
