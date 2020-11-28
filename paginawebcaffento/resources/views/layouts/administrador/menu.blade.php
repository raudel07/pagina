@extends('layouts.administrador.main')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalAgregar">
        <i class=" fas fa-user fa-sm text-white-50"></i> Agregar Seccion</a>
</div>
<div class="container">

</div>
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/usuarios" method="post">
                @csrf
                @if($message = Session::get('ErrorInsert'))
                <div class="col-12 alert alert-danger alert-dismissable fade show " role="alert">
                    <h5>Errores: </h5>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass1" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass2" placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection