@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
        <h1>Grandes Premios</h1>
    </div>
@stop
@section('content')	
    <div class="container">
        @foreach($races as $race)
        <div class="row panel {{ $race->isNext() ? '' : 'actual' }}">
            <div class="col-md-2 col-xs-4 center-block flag">
                {!! Html::image('assets/img/races/'.$race->id.'.jpg') !!}
            </div>      
            <div class="col-md-10 col-xs-8">
                <h4>
                    {{ $race->mainName() }} 
                </h4>
                <p class="small">
                    {{ $race->start }}
                    @if($race->isStarted())
                        <i class="glyphicon glyphicon-ok tick"></i>    
                    @endif
                </p>
                <p>
                <ul class="list-inline">
                    @if($race->hasResults())
                        <li><a href="{{ route('races.show', $race->id) }}" class="btn btn-success">Ver puntuaciones</a></p></li>
                    @endif
                    @if ( Auth::check() && Auth::user()->isAdmin() )
                        <li><a href="{{ route('races.edit', $race->id) }}" class="btn btn-success">Editar</a></p></li>
                    @endif
                </ul>
            </div>
        </div>
        @endforeach
    </div>
@endsection