@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Trains: </h1>
    <ul>

    </ul>
    <div class="container">
        <div class="row">
        @foreach ($trains as $train)
            <div class="col-12 col-lg-3 col-md-4 col-sm-6 col">
            Codice treno: {{$train -> codice_treno}}
            <br>
            <br>
            Azienda: {{$train -> azienda}}
            <br>
            <br>
            Staz. Partenza: {{$train -> stazione_di_partenza}}
            <br>
            <br>
            Staz. Arrivo: {{$train -> stazione_di_arrivo}}
            <br>
            <br>
            Orario Partenza: {{$train -> orario_di_partenza}}
            <br>
            <br>
            Orario Arrivo: {{$train -> orario_di_arrivo}}
            <br>
            <br>
            N. di carrozze: {{$train -> numero_di_carrozze}}
            <br>
            <br>
            È in orario? {{$train -> in_orario}}
            <br>
            <br>
            È cancellato? {{$train -> cancellato}}
            <br>
            <br>
           </div>
        @endforeach
        </div>
    </div>
@endsection
