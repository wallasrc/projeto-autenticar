@extends('layouts.teste', ['current' => 'reservas'])



@section('body')
    @foreach ($cliente_reservas as $reserva)
        <h1>Reservas feitas por: {{ $reserva->nome }} </h1>
        <br>
        <br>
        <br>
        <p><strong>Código: {{ $reserva->id }}</strong></p>
        <h3>De: {{ $reserva->data_checkin }}</h3>


        <h3>Até: {{ $reserva->data_checkout }}</h3>
        <hr>
    @endforeach
@endsection
