@extends('layouts.black')

@section('content')
<div class="page-header">
    <h1>Registro de profesores</h1>
</div>
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                        <h5 class="title">Registro</h5>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(isset($professor))
                        <form action="{{route('profesor.update',$professor->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        @else
                            <form action="{{route('profesor.store')}}" method="POST">
                        @endif
                        @csrf
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="name" value="{{$professor->user->name ?? ''}}{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="username" value="{{$professor->user->username ?? ''}}{{ old('username') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" placeholder="ejemplo@email.com" name="email" value="{{$professor->user->email ?? ''}}{{ old('email') }}">
                                </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label for="Codigo">Código</label>
                                    <input type="text" class="form-control" name="code" value="{{$professor->user->code ?? ''}}{{ old('code') }}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="password" value="{{$professor->user->password ?? ''}}{{ old('password') }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                    <div class="form-group">
                                        <label for="Departamento">Departamento</label>
                                        <select name="department_id">
                                        @foreach($departments as $dpt)
                                            <option value="{{$dpt->id}}" {{ isset($professor) && 
                                            $professor->department->id == $dpt->id ? 'selected' : '' }}>
                                            {{$dpt->name}}
                                        </option>
                                        @endforeach
                                        </select>                                
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