@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
     	<div class="container">
     		<div class="row">
     			<div class="col-sm-1 col-xs-12 block-center center-block">
     				{!! Html::image('assets/img/races/'.$race->id.'.jpg', null, array('class' => 'thumb-flag center-block')) !!}
     			</div>
     			<div class="col-sm-11 col-xs-12 text-center">
     				<h1>{{ $race->mainName() }}</h1>
					<h4>{{ $race->start }}</h4>
     			</div>
     		</div>
     	</div>
	</div>
@stop
@section('content')
    <div class="panel-body">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-9">
    				{!! Form::model($race, [
    					'method' => 'PATCH',
    					'route' => ['races.update', $race->id]
					]) !!}	
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
		            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		        {!! Form::close() !!}
    			</div>
    			<div class="col-sm-3">
    				@include('partials.errors')
    			</div>
    		</div>
    	</div>
    </div>
@endsection
<?php
/*
{!! Form::model($race, ['url' => '/races/'.$race->id], 'method' => 'put') !!}
*/
?>