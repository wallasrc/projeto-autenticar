@extends('layouts.teste', ['current' => 'login'])

@section('body')
    <div style="display: flex; height: 100vh;align-items: center; justify-content: center;">
        <div class="card p-3" style="width: 25rem;">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control  mb-3" aria-describedby="emailHelp"
                        placeholder="Nome" required autofocus >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control  mb-3"
                        placeholder="Email" required  >
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" required id="password" class="form-control  mb-3" id="password"
                        placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirme a senha</label>
                    <input type="password" name="password_confirmation" required id="password_confirmation"
                        class="form-control  mb-3" id="password_confirmation" placeholder="Confirme a senha">
                </div>
                <div class="form-group form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="exampleCheck1">Lembrar-se</label>

                    <a href="{{ route('login') }}" class="m-5">
                        {{ 'Já resistrado?' }}
                    </a>
                </div>

                <button style="margin: 0 auto;" type="submit" class="btn btn-primary mt-4">Registrar</button>

            </form>

        </div>
    </div>
@endsection
