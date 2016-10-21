@extends('layouts.master')
@section('header')
     <div class="panel-heading main-title">
        <h1>Clasificación general de F1 Donky <?php echo date("Y"); ?></h1>
    </div>
@stop
@section('content') 
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Puntos</th>
            </tr>
            @foreach($users as $index => $user)
                <tr>
                    <td>
                        {{ $index+1 }}
                    </td>
                    <td>
                        {{ $user->getName() }}
                    </td>
                    <td>
                        {{ $user->getTotalScore() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection