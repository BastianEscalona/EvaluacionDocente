
@extends('layouts.app2')

@section('content')


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cards - Tarjetas con efecto Hover</title>
	 <style>
	 	@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Montserrat', sans-serif;
		}
		/*Cards*/
		.container-card{
			width: 100%;
			display: flex;
			max-width: 1100px;
			margin: auto;
		}
		.title-cards{
			width: 100%;
			max-width: 1080px;
			margin: auto;
			padding: 20px;
			margin-top: 20px;
			text-align: center;
			color: #7a7a7a;
		}
		.card{
			width: 100%;
			margin: 20px;
			border-radius: 6px;
			overflow: hidden;
			background:#fff;
			box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
			transition: all 400ms ease-out;
			cursor: default;
		}
		.card:hover{
			box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
			transform: translateY(-3%);
		}
		.card img{
			width: 100%;
			height: 210px;
		}
		.card .contenido-card{
			padding: 15px;
			text-align: center;
		}
		.card .contenido-card h3{
			margin-bottom: 15px;
			color: #7a7a7a;
		}
		.card .contenido-card p{
			line-height: 1.8;
			color: #6a6a6a;
			font-size: 14px;
			margin-bottom: 5px;
		}
		.card .contenido-card a{
			display: inline-block;
			padding: 10px;
			margin-top: 10px;
			text-decoration: none;
			color: #2fb4cc;
			border: 1px solid #2fb4cc;
			border-radius: 4px;
			transition: all 400ms ease;
			margin-bottom: 5px;
		}
		.card .contenido-card a:hover{
			background: #2fb4cc;
			color: #fff;
		}
		@media only screen and (min-width:320px) and (max-width:768px){
			.container-card{
				flex-wrap: wrap;
			}
			.card{
				margin: 15px;
			}
		}
	</style>
	<link rel="stylesheet" href="estilos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body background="https://portal.ucm.cl//content/uploads/2016/10/universidad-ucm.jpg"
	<!--   Tarjetas-->
<div class="title-cards">
		<h2></h2>
	</div>
<div class="container-card">
	
		<div class="card">
			<figure>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZ9DMNFHxwZcfPXJrJeBMITxPMP3FMZk_ixXzTfzt4G_C-G058">
			</figure>
			<div class="contenido-card">
				<h3>Comision</h3>
				<p>La Comision esta compuesta por 3 Docentes encargados de realizar la Evaluacion de los Academicos</p>
				<a href="{{ route('AsignarComision.index') }}">Ver Comisión</a> // Rediriguir a vista de la comision con los academicos que pertenezcan a ella.
			</div>
		</div>
		<div class="card">
			<figure>
				<img src="https://colmayorbolivar.edu.co/blog/wp-content/uploads/2017/06/imagen-administracion.jpg">
			</figure>
			<div class="contenido-card">
				<h3>Academicos a Evaluar</h3>
				<p>Se puede apreciar a todos los Academicos que es necesario realizar su evaluación</p>
				<a href="{{ route('Academico.index') }}">Ver Academicos</a>
			</div>
		</div>
		
		<div class="card">
			<figure>
				<img src="https://image.freepik.com/foto-gratis/desarrollo-programadores-desarrollo-tecnologias-diseno-codificacion-sitios-web_18497-1090.jpg">
			</figure>
			<div class="contenido-card">
				<h3>Evaluaciones Realizadas</h3>
				<p>Contiene todas las evaluaciones que se han realizado a los respectivos Academicos</p>
				<a href="{{ route('Evaluacion.index') }}">Ver Evaluaciones</a>
			</div>
		</div>
	</div>
<!--Fin   Tarjetas-->
</body>
</html>

@endsection
