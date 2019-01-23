@extends('inicio')

@section('content')
	<div align="center">
		<h2>Listado de propietario</h2>
		<p> NOMBRE : {{$propietario->nombres}} </p>
		<p> APELLIDOS : {{$propietario->apellidos}} </p>
		<p> DNI : {{$propietario->dni}} </p>
		<p> TELEFONO : {{$propietario->telefono}} </p>
		<p> MASCOTAS : {{$propietario->num_mascotas}} </p>
		<p> FAMILIARES : {{$propietario->num_familiares}} </p>
		<p> NOMBRE CARPETA : {{$propietario->nombre_carpeta}}</p>
		<p> ID_USUARIO : {{$propietario->id_usuario}}</p>

	</div>

	<div class="col-sm-4"></div>

@endsection