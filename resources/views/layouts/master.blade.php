 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F1 Donky</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	{!! Html::style('assets/css/bootstrap.min.css') !!}
 	{!! Html::style('assets/css/app.css') !!}
 	{!! Html::style('assets/css/orange.css') !!}
 
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target="#navbar-menu">
	<!-- Navbar -->
    <div class="navbar navbar-custom sticky" role="navigation" id="sticky-nav">
	    <div class="container">
			<!-- Navbar-header -->
	        <div class="navbar-header">
	            <!-- Responsive menu button -->
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toogle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <!-- LOGO -->
	            <a class="navbar-brand logo" href="{{ url('/') }}">
	                F1 Donky
	            </a>
	        </div>
	        <!-- end navbar-header -->
			<!-- menu -->
	        <div class="navbar-collapse collapse" id="navbar-menu">
	            <!-- Navbar left -->
	            <ul class="nav navbar-nav nav-custom-left">
		            <li>
		                {{ HTML::link('/standings', 'Clasificación') }}
		            </li>
		            <li>
		                {{ HTML::link('/races', 'Resultados') }}
		            </li>
		            <li>
		                {{ HTML::link('/rules', 'Reglas') }}
		            </li>
	            </ul>
	            <!-- Navbar right -->

	            <ul class="nav navbar-nav navbar-right">
	                @if (Auth::check())
	           			<li class="dropdown">
		                    <a href="#" data-toggle="dropdown">
		                        <i class="glyphicon glyphicon-user"></i>
		                        {{ Auth::user()->getName() }}
		                        <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu arrow">
		                    	<li><a href="{{ route('bets.create') }}"><i class="fa fa-btn fa-sign-out"></i>Votar</a></li>
		                    	<li><a href="{{ url('/bets') }}"><i class="fa fa-btn fa-sign-out"></i>Mis apuestas</a></li>
		                        <li><a href="{{ url('/logout') }}">Logout</a></li>
		                    </ul>
		                </li>
					@else
	                	<li class="active"> {{ HTML::link('/login', 'Login') }}</li>
	                @endif	
	            </ul>
	        </div>
	        <!--/Menu -->
	    </div>
	    <!-- end container -->
	</div>
    <!-- End navbar-custom -->
 	<main>
		<div class="row">
			<div class="col-md-9">
				@yield('header')
			</div>
			<div class="col-md-3">
				@if (Session::has('success'))
			    <div class="alert alert-success">
			        {{ Session::get('success') }}
				</div>
			@endif
			@if (Session::has('message'))
					<div class="alert alert-info">
 					{{ Session::get('message') }}
					</div>
				@endif
				@if (Session::has('error'))
			    <div class="alert alert-warning">
			        {{ Session::get('error') }}
			    </div>
			 @endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@yield('content')
			</div>
		</div>
 	</main>
 	<!-- FOOTER -->
    <footer class="section bg-gray footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h5>Hall of Fame</h5>
                    <ul class="list-unstyled">
                        <li>2009 - Berni</li>
						<li>2010 - Gema</li>
						<li>2011 - Sara</li>
						<li>2012 - Jimmy</li>
						<li>2013 - Berni</li>
						<li>2014 - Isaac</li>
						<li>2015 - Gema</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>Premios</h5>
                    <ul class="list-unstyled">
                        <li>Primero.- 60 euros</li>
						<li>Segundo.- 30 euros</li>
						<li>Tercero.- 20 euros</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>F1 Donky</h5>
                    <ul class="list-unstyled">
                        <li><a href="http://www.donky.es/">Peña Donky</a></li>
						<li><a href="http://www.f1.com/">F1</a></li>
                        <li><a href="http://www.bbc.com/sport/formula1/2016/results">F1 BBC</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h5>Contacto</h5>
                    <address>
                        Preguntad por Berni.
                    </address>
                    <p class="text-muted m-b-0"><?php echo date("Y"); ?> © Peña Donky</p>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </footer>
    <!-- END FOOTER -->

    <!-- Back to top -->    
    <a href="#" class="back-to-top" id="back-to-top"> <i class="pe-7s-angle-up"> </i> </a>

	<!-- Scripts -->
	{!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/jquery.easing.1.3.min.js') !!}
	{!! Html::script('assets/js/jquery.sticky.js') !!}
	{!! Html::script('assets/js/app.js') !!}
</body>
</html>