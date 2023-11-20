
@extends('layouts.teste', ['current' => 'login'])

@section('body')
    <div style="display: flex; height: 100vh;align-items: center; justify-content: center;">
        <div class="card p-3" style="width: 25rem;">

            <form method="POST" action="{{  route('password.update') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control  mt-3" aria-describedby="emailHelp"
                        placeholder="Email" required autofocus value="email">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" required id="password" class="form-control  mt-3" id="password"
                        placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="exampleCheck1">Lembrar-se</label>
                    <a href="{{ route('password.request') }}" class="m-5">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Entrar</button>

            </form>
            <a href="{{ route('register') }}" style="margin: 0 auto;" class=" mt-5">Registre-se</a>

        </div>
    </div>
@endsection

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
