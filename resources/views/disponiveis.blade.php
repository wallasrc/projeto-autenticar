@extends('layouts.teste', ['current' => 'quartos'])
@section('body')
    <main>
        <div>

            @if (count($quartosDisponiveis) > 0)
                <div class="container-md mt-3 d-flex justify-content-center flex-wrap ">

                    @foreach ($quartosDisponiveis as $quarto)
                        <div class="card mt-3 mx-2" style="width: 18rem;">
                            <div class="card-body">
                                <ul class="list-group row">
                                    <li class="list-group-item"><strong>Numero do quarto: </strong>{{ $quarto->numero }}</li>
                                    <li class="list-group-item"><strong>Capacidade do quarto:</strong>
                                        {{ $quarto->capacidade }}</li>
                                    <li class="list-group-item"><strong>Preço da diária:
                                        </strong>R${{ str_replace('.', ',', $quarto->preco_diaria) }}</li>
                                    {{-- substituindo ponto por virgula com str_replace() --}}
                                    <li class="list-group-item">
                                        <strong>{{ $quarto->disponivel ? 'Quarto disponível' : 'Quarto Indisponivel' }}</strong>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
                <h2>Não há quartos disponíveis</h2>
            @endif
        </div>
    </main>
@endsection
