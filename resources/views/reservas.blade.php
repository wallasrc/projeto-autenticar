@extends('layouts.teste', ['current' => 'reservas'])

@section('body')
        <h1>Reservas feitas por: {{ $cliente }} </h1>
        <br>
        <br>
        <br>
        @foreach ($reservas as $reserva)
            <p><strong>Código: {{ $reserva->id }}</strong></p>
            <h3>De: {{ $reserva->data_checkin }}</h3>


            <h3>Até: {{ $reserva->data_checkout }}</h3>
            <hr>
        @endforeach

@endsection
