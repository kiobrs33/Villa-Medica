@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Propietario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/propietario/actualizando')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_pro" value="{{$propietario->id_pro}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ $propietario->nombres }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ $propietario->apellidos }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Dni</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ $propietario->dni }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $propietario->telefono }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero de Mascotas</label>

                            <div class="col-md-6">
                                <input id="num_mascotas" type="text" class="form-control" name="num_mascotas" value="{{ $propietario->num_mascotas }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero de Familiares</label>

                            <div class="col-md-6">
                                <input id="num_familiares" type="text" class="form-control" name="num_familiares" value="{{ $propietario->num_familiares }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre Carpeta</label>

                            <div class="col-md-6">
                                <input id="nombre_carpeta" type="text" class="form-control" name="nombre_carpeta" value="{{ $propietario->nombre_carpeta }}" required>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Id de cuenta Usuario</label>

                            <div class="col-md-6">
                                <input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ $propietario->id_usuario }}" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
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