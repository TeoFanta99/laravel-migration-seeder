@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Trains: </h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train -> stazione_di_partenza}}
            </li>
        @endforeach
    </ul>
@endsection
