@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-xs-12 block-center flag text-center">
                    {!! Html::image('assets/img/races/'.$race->id.'.jpg') !!}
                </div>
                <div class="col-sm-11 col-xs-12 text-center">
                    <h1>{{ $race->mainName() }}</h1>
                    <h4>{{ $race->start }}</h4>
                    <nav class="row">
                        <div class="col-xs-6">
                            @if(!$race->isFirstRaceOfSeason())
                            <a href="{{ route('races.show', $race->id-1) }}">
                                <i class="glyphicon glyphicon-arrow-left"></i>    
                            </a>
                            @endif        
                        </div>
                        <div class="col-xs-6">
                            @if($race->hasNextResults())
                            <a href="{{ route('races.show', $race->id+1) }}">
                                <i class="glyphicon glyphicon-arrow-right"></i>    
                            </a>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
@stop
@section('content')
    <div class="container">
        <h2>Puntuaciones</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Usuario</th>
                    <th>Total</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>Pole</th>
                    <th>Fastest</th>
                    <th>Cinco</th>
                    <th>Bonus</th>
                </tr>
                @foreach ($bets as $bet)
                    <tr>
                        <td>
                            {{ $bet->user->name }}
                        </td>
                        <td>
                            {{ $bet->getTotalScore() }}
                        </td>
                        <td class="{{ $bet->hasGuessedP1() ? 'green' : '' }}">
                            {{ $bet->getNameP1() }}
                        </td>
                        <td class="{{ $bet->hasGuessedP2() ? 'green' : '' }}">
                            {{ $bet->getNameP2() }}
                        </td>
                        <td class="{{ $bet->hasGuessedP3() ? 'green' : '' }}">
                            {{ $bet->getNameP3() }}
                        </td>
                        <td class="{{ $bet->hasGuessedP4() ? 'green' : '' }}">
                            {{ $bet->getNameP4() }}
                        </td>
                        <td class="{{ $bet->hasGuessedP5() ? 'green' : '' }}">
                            {{ $bet->getNameP5() }}
                        </td>
                        <td class="{{ $bet->hasGuessedPole() ? 'green' : '' }}">
                            {{ $bet->getNamePole() }}
                        </td>
                        <td class="{{ $bet->hasGuessedFastest() ? 'green' : '' }}">
                            {{ $bet->getNameFastest() }}
                        </td>
                        <td class="text-center">
                            @if ($bet->hasFivePilotsUnordered())
                                <i class="glyphicon glyphicon-ok tick green"></i> 
                            @endif
                        </td>
                        <td class="text-center">
                            @if ($bet->hasBonus())
                                <i class="glyphicon glyphicon-king"></i> 
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="panel panel-default panel-scores">
            <ul class="list-inline text-primary">
                <li>P1=25 puntos</li>
                <li>P2=18 puntos</li>
                <li>P3=15 puntos</li>
                <li>P4=12 puntos</li>
                <li>P5=10 puntos</li>
                <li>Pole=10 puntos</li>
                <li>Fastest=10 puntos</li>
                <li>Cinco=10 puntos</li>
                <li>Bonus=50 puntos</li>
            </ul>
        </div>
        <h2>Resultados de la carrera</h2>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Piloto</th>
            </tr>
            <tr>
                <td>Primero</td>
                <td>{{ $race->getNameP1() }}</td>
            </tr>
            <tr>
                <td>Segundo</td>
                <td>{{ $race->getNameP2() }}</td>
            </tr>
            <tr>
                <td>Tercero</td>
                <td>{{ $race->getNameP3() }}</td>
            </tr>
            <tr>
                <td>Cuarto</td>
                <td>{{ $race->getNameP4() }}</td>
            </tr>
            <tr>
                <td>Quinto</td>
                <td>{{ $race->getNameP5() }}</td>
            </tr>
            <tr>
                <td>Pole position</td>
                <td>{{ $race->getNamePole() }}</td>
            </tr>
            <tr>
                <td>Vuelta rápida</td>
                <td>{{ $race->getNameFastest() }}</td>
            </tr>
        </table>
    </div>
@endsection