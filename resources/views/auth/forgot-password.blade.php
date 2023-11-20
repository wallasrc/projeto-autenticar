@extends('layouts.teste', ['current' => 'login'])

@section('body')
    <div style="display: flex; height: 100vh;align-items: center; justify-content: center;">
        <div class="card p-3" style="width: 25rem;">

               
                    
            <form method="POST" action="{{route('password.email') }}">

                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control  mt-3" aria-describedby="emailHelp"
                        placeholder="Email" required autofocus >
                </div>

             

                <button type="submit" class="btn btn-primary mt-3">Entrar</button>
                
                <label class="mt-3" style="font-size: small" for="label">Esqueceu sua senha? Sem problemas. Apenas informe seu endereço de e-mail que enviaremos um link que permitirá definir uma nova senha.</label>

            </form>

        </div>

    </div>
@endsection