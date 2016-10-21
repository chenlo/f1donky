@extends('layouts.master')
@section('header')
     <div class="panel-heading">
        <h1>Reglas de la competición</h1>
    </div>
@stop
@section('content')	
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <h2>¿Qué y cuándo?</h2>
                    <p>Se podrá votar hasta que empiece la <strong>Q1</strong> de la correspondiente carrera.</p>
                    <p>En cada Gran Premio se eligen:</p>
                    <ul>
                        <li>Los 5 primeros pilotos</li>
                        <li>El piloto que realice la vuelta más rápida</li>
                        <li>El piloto que empiece la carrera en la pole</li>
                    </ul>    
                    <h3>En caso de empate</h3>
                    <p>
                        En caso de empate, el ganador se resolverá por el número de aciertos de ganadores de GP, seguido por el de poles acertadas. <br>En caso de que se mantenga el empate, se resolverá a hostias.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Puntuación</h2>
                    <ul>
                        <li>Primero: 25 puntos</li>
                        <li>Segundo: 18 puntos</li>
                        <li>Tercero: 15 puntos</li>
                        <li>Cuarto: 12 puntos</li>
                        <li>Quinto: 10 puntos</li>
                    </ul>
                    <ul>
                        <li>Pole position: 10 puntos</li>
                        <li>Vuelta rápida: 10 puntos</li>
                    </ul>
                    <h3>Bonus</h3>
                    <ul>
                        <li>50 puntos, si predices correctamente al menos 4 posiciones</li>
                        <li>10 puntos, si aciertas todos los pilotos, aunque no en su posición exacta</li>
                    </ul>
            </div>
        </div>
    </div>
@endsection