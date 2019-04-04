@extends('layouts.black')

@section('content')
<div class="page-header">
    <h1>Registro de Alumnos</h1>
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

                        @if(isset($student))
                        <form action="{{route('student.update',$student->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        @else
                            <form action="{{route('student.store')}}" method="POST">
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
                                        <input type="text" class="form-control" name="name" value="{{$student->user->name ?? ''}}{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="username" value="{{$student->user->username ?? ''}}{{ old('username') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" placeholder="ejemplo@email.com" name="email" value="{{$student->user->email ?? ''}}{{ old('email') }}">
                                </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label for="Codigo">Código</label>
                                    <input type="text" class="form-control" name="code" value="{{$student->user->code ?? ''}}{{ old('code') }}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="password" value="{{$student->user->password ?? ''}}{{ old('password') }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                        <div class="form-group">
                                            <label for="Carrera">Carrera</label>
                                            <select name="carrer_id">
                                            @foreach($carrers as $carrer)
                                                <option value="{{$carrer->id}}" {{ isset($student) && 
                                                $student->carrer->id == $carrer->id ? 'selected' : '' }}>
                                                {{$carrer->name}}
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