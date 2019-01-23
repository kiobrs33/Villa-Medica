@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Acciones</div>
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

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<left><a href="/validado/edificios/reg_edificios" class="btn btn-primary" role=button>Agregar informacion de edificios</a></left>
							</div>
						</div>

						<div class="col-md-6">
							Nro torre: <select name="cuotas">
							 <option value="1">1</option>
							 <option value="2">2</option>
							 <option value="1">3</option>
							 <option value="2">4</option>
							 <option value="1">5</option>
							 <option value="2">6</option>
						</select>
							<div class="form-group">
								<label class="col-md-3 control-label">Buscar: </label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="buscar">
								</div>

							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
