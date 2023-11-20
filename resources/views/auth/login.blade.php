@extends('layouts.teste', ['current' => 'login'])

@section('body')
    <div style="display: flex; height: 100vh;align-items: center; justify-content: center;">
        <div class="card p-3" style="width: 25rem;">

            <form method="POST" action="{{ route('login') }}">
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
