<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h1>{{ $bet_info["race"] }}</h1>
	<p>
		<ul>
			<li>Primero: {{ $bet_info["p1"] }}</li>
			<li>Segundo: {{ $bet_info["p2"] }}</li>
			<li>Tercero: {{ $bet_info["p3"] }}</li>
			<li>Cuarto: {{ $bet_info["p4"] }}</li>
			<li>Quinto: {{ $bet_info["p5"] }}</li>
		</ul>
	</p>
	<p>Pole: {{ $bet_info["pole"] }}</p>
	<p>Vuelta rápida: {{ $bet_info["fastest"] }}</p>
</body>
</html>
