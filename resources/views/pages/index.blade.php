@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Trains: </h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train -> codice_treno}} - 
                {{$train -> azienda}} - 
                {{$train -> stazione_di_partenza}} - 
                {{$train -> stazione_di_arrivo}} - 
                {{$train -> orario_di_partenza}} - 
                {{$train -> orario_di_arrivo}} - 
                {{$train -> numero_di_carrozze}} -
                {{$train -> in_orario}} -
                {{$train -> cancellato}}
            </li>
        @endforeach
    </ul>
@endsection
