@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
        <h1>Pilotos</h1>
    </div>
@stop
@section('content')	
    <div class="container">
        <ul class="list-group">
        @foreach($drivers as $driver)
            <li class="list-group-item">{{ $driver->getLastName() }} - {{ $driver->getTeamName() }}</li>
        @endforeach
        </ul>
    </div>
@endsection