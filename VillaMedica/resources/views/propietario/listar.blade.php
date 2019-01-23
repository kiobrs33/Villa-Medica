@extends('inicio')

@section('content')
	<div>
		<h2>Listado de Propietarios</h2>
		<a href="{{ url('/propietario/crear')}}">Nuevo Propietario</a>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Dni</th>
					<th>Telefono</th>
					<th>Mascotas</th>
					<th>Familia</th>
					<th>Nombre Carpeta</th>
					<th>id_usuario</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($propietarios as $pro)
					<tr>
						<td>{{ $pro->id_pro }}</td>
						<td>{{ $pro->nombres }}</td>
						<td>{{ $pro->apellidos }}</td>
						<td>{{ $pro->dni }}</td>
						<td>{{ $pro->telefono }}</td>
						<td>{{ $pro->num_mascotas}}</td>
						<td>{{ $pro->num_familiares}}</td>
						<td>{{ $pro->nombre_carpeta}}</td>
						<td>{{ $pro->id_usuario }}</td>
						<td><a href="{{ url('/mostrar', $pro->id_pro) }}">Mostrar</a></td>
						<td><a href="{{ url('/propietario/actualizar', $pro->id_pro)}}">Editar</a></td>
						<td>
							<form action="{{ url('/borrar', $pro->id_pro) }}" method="POST">
								{{csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $propietarios->render() !!}
	</div>

	<div class="col-sm-4"></div>

@endsection