@extends('layouts.master')

@section('content')
<!-- HOME -->
<section class="bg-custom home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="home-fullscreen" id="home-fullscreen">
                    <div class="full-screen">
                        <div class="home-wrapper home-wrapper-alt">
                            <h1 class="font-light text-white">F1 Donky <?php echo date("Y"); ?></h1>
                            <h4 class="text-light">Quédate con la pasta del resto demuestrando cuánto sabes de Fórmula 1.</h4>
                            <a href="{{ url('/login') }}" class="btn btn-white-bordered">Login para jugar</a><br><br>
                            <a href="http://f1.donky.es/old" class="">
                                Si no te fías del nuevo interfaz, puedes jugar también en la vieja
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
@endsection
