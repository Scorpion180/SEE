@extends('layouts.black')

@section('content')
<div class="page-header">
    <h1>Registro de usuario</h1>
</div>
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                        <h5 class="title">Registro</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('usuario.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" placeholder="ejemplo@email.com" name="email">
                                </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label for="Codigo">Código</label>
                                    <input type="text" class="form-control" name="codigo">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection