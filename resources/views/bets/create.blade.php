@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
     	<div class="container">
     		<div class="row">
                    <div class="col-sm-1 col-xs-12 block-center center-block">
                         {!! Html::image('assets/img/races/'.$race->id.'.jpg', null, array('class' => 'thumb-flag center-block')) !!}
                    </div>
     			<div class="col-sm-11 col-xs-12">
     				<h1>{{ $race->mainName() }}</h1>
					<h4>{{ $race->start }} - {{ $race->getDateDiffHumans() }}</h4>
     			</div>
     		</div>
     	</div>
	</div>
     <div class="panel-body">
          <div class="container">
               <div class="row">
                    <div class="col-sm-9">
                         {!! Form::model($race, [
                              'method' => 'POST',
                              'route' => ['bets.store']
                         ]) !!}    
                         <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                         <input type="hidden" name="race_id" id="race_id" value="{{ $race->id }}">
                         <div class="form-group">
                                   {!! Form::label('p1', 'Primero') !!}
                                   <div class="form-controls">
                                   {!! Form::select('p1', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('p2', 'Segundo') !!}
                                   <div class="form-controls">
                                   {!! Form::select('p2', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('p3', 'Tercero') !!}
                                   <div class="form-controls">
                                   {!! Form::select('p3', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('p4', 'Cuarto') !!}
                                   <div class="form-controls">
                                   {!! Form::select('p4', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('p5', 'Quinto') !!}
                                   <div class="form-controls">
                                   {!! Form::select('p5', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('pole', 'Pole position') !!}
                                   <div class="form-controls">
                                   {!! Form::select('pole', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                              <div class="form-group">
                                   {!! Form::label('fastest', 'Vuelta rápida') !!}
                                   <div class="form-controls">
                                   {!! Form::select('fastest', $drivers, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar piloto']) !!}
                              </div>
                              </div>
                           {!! Form::submit('Votar', ['class' => 'btn btn-primary']) !!}
                       {!! Form::close() !!}
                    </div>
                    <div class="col-sm-3">
                         @include('partials.errors')
                    </div>
               </div>
          </div>
     </div>
@stop
@section('content')
    
@endsection