@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Propietarios</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Al parecer algo esta mal.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/validacion/registro">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="panel-heading">Informacion de los Departamentos</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Tipo de departamento: </label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="tipo" value="{{ old('tipo') }}">
							</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Numero de coche: </label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="nro_coche" value="{{ old('nro_coche') }}">
							</div>

							<label class="col-md-2 control-label">Numero de estacionamiento:</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="nro_estacionamiento" value="{{ old('nro_estacionamiento') }}">
							</div>

              <label class="col-md-2 control-label">Numero de torre:</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="nro_torre" value="{{ old('nro_torre') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrarse
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
