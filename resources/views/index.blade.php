@extends('layouts.teste', ['current' => 'inicio'])

@section('body')
    <main style="margin: 0 auto; width:80vw">
        @if (count($quartos) > 0)
            <div class="container-fluid mt-3 d-flex justify-content-center flex-wrap ">
                <div class="container-fluid overflow-hidden text-center">
                    <div class="container-fluid">
                        <div class="row border">
                            <div class="col p-4 border-end"
                                style="height: 300px; display:flex; flex-direction:column; justify-content: space-around;">
                                <h5>Escolha um cliente e verifique quais reservas ele fez (Pela tabela reservas): </h5>

                                {{ Form::open(['url' => '/reservas', 'method' => 'POST']) }}
                                @csrf
                                {{ Form::label('cliente_id', 'Escolha o cliente: ', ['class' => 'row mb-3']) }}
                                <select name="cliente_id" class="row form-control">
                                    <option value="">-- Escolha um cliente --</option>

                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                    @endforeach

                                </select>

                                {!! Form::submit('Ver reservas', ['class' => 'btn btn-primary btn-sm teste mt-3']) !!}
                                {{ Form::close() }}
                            </div>
                            <div class="col p-4"
                                style="height: 300px; display:flex; flex-direction:column; justify-content: space-around;">
                                <h5>Escolha um cliente e verifique quais reservas ele fez
                                    (Pela tabela clientes): </h5>
                                {{ Form::open(['url' => '/listar-reservas-cliente', 'method' => 'POST']) }}
                                @csrf
                                {{ Form::label('cliente_id', 'Escolha o cliente: ', ['class' => 'row mb-3']) }}
                                <select name="cliente_id" class="row form-control">
                                    <option value="">-- Escolha um cliente --</option>

                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                    @endforeach

                                </select>

                                {!! Form::submit('Ver reservas', ['class' => 'btn btn-primary btn-sm teste mt-3']) !!}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="  container-fluid d-flex  justify-content-center flex-column align-items-center"
                    style="margin: 0 auto; width:80vw">


                    <div class="m-5 border p-5 rounded-2" style="width: 40vw">

                        <h5 style="text-align:center;margin: 30px 0px;">Escolha uma data para saber quis reservas foram feitas para ela.</h5>
                        {{ Form::open(['url' => '/reservas-periodo', 'method' => 'POST']) }}
                        @csrf
                        {{ Form::label('cliente_id', 'Checkin: ') }}
                        {!! Form::date('data_indicada', null, ['class' => 'form-control mb-3']) !!}

                        {!! Form::submit('Ver reservas', ['class' => 'btn btn-primary btn-sm teste mt-3']) !!}
                        {{ Form::close() }}
                    </div>
                </div>
                <div>
                    <h5
                        style=" width:210px; text-align:center;margin: 30px 0px; border-bottom:2px solid #de556f; margin: 10px auto;">
                        Lista de todos os quartos</h5>
                    <div style="display: flex; flex-wrap: wrap; justify-content: center">
                        @foreach ($quartos as $quarto)
                            <div class="card mt-3 mx-2" style="width: 18rem;">
                                <div class="card-body">
                                    <ul class="list-group row"
                                        style=" {{ !$quarto->disponivel ? 'color:red' : 'color:green' }}">
                                        <li class="list-group-item"><strong>Numero do quarto:
                                            </strong>{{ $quarto->numero }}</li>
                                        <li class="list-group-item"><strong>Capacidade do quarto:</strong>
                                            {{ $quarto->capacidade }}</li>
                                        <li class="list-group-item"><strong>Preço da diária:</strong>
                                            R${{ str_replace('.', ',', $quarto->preco_diaria) }}</li>
                                        {{-- substituindo ponto por virgula com str_replace() --}}

                                        <strong>
                                            {{ $quarto->disponivel ? 'Quarto disponível' : 'Quarto Indisponivel' }}</strong>
                                    </ul>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <h2>Não há quartos disponíveis</h2>
        @endif
    </main>
@endsection
