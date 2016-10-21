@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
        <h1>{{ Auth::user()->getName() }}, llevas {{ Auth::user()->getTotalScore() }} puntos.</h1>
    </div>
@stop
@section('content')	
    <div class="container">
        <h2>Éstas han sido tus apuestas:</h2>
        @foreach($bets as $bet)
        <div class="row panel">
            <div class="col-md-1 col-xs-3 center-block flag">
                {!! Html::image('assets/img/races/'.$bet->race->id.'.jpg', null, array('class' => 'thumb-flag center-block')) !!}
            </div>      
            <div class="col-md-11 col-xs-9">
                <h4>
                    {{ $bet->race->mainName() }}
                </h4>
                <h5>{{ $bet->race->start }}</h5>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-body">Puntuación: {{ $bet->getTotalScore() }}</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item {{ $bet->hasGuessedP1() ? 'green' : '' }}">
                            {{ $bet->getNameP1() }}<span class="badge">1</span>
                        </li>
                        <li class="list-group-item {{ $bet->hasGuessedP2() ? 'green' : '' }}">
                            {{ $bet->getNameP2() }}<span class="badge">2</span>
                        </li>
                        <li class="list-group-item {{ $bet->hasGuessedP3() ? 'green' : '' }}">
                            {{ $bet->getNameP3() }}<span class="badge">3</span>
                        </li>
                        <li class="list-group-item {{ $bet->hasGuessedP4() ? 'green' : '' }}">
                            {{ $bet->getNameP4() }}<span class="badge">4</span>
                        </li>
                        <li class="list-group-item {{ $bet->hasGuessedP5() ? 'green' : '' }}">
                            {{ $bet->getNameP5() }}<span class="badge">5</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item {{ $bet->hasGuessedPole() ? 'green' : '' }}">
                            {{ $bet->getNamePole() }}<span class="badge">pole</span>
                        </li>
                        <li class="list-group-item {{ $bet->hasGuessedFastest() ? 'green' : '' }}">
                            {{ $bet->getNameFastest() }}<span class="badge">fast</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            @if($bet->race->hasResults())
                                <a href="{{ route('races.show', $bet->race->id) }}">Ver todas las puntuaciones de la carrera.</a>
                            @else
                                <span class="label label-warning">Resultados de la carrera no disponibles.</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection