@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Profesores</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Usuario</th>
      <th scope="col">Departamento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$professor->id}}</td>
      <td>{{$professor->user->name}}</td>
      <td>{{$professor->user->email}}</td>
      <td>{{$professor->user->username}}</td>
      <td>{{$professor->department->name}}</td>
    </tr>
  </tbody>
</table>
    </div>
</div>
<div class="row">
  <div class="col-1 offset-2">
    <a href="{{route('profesor.edit',$professor->id)}}" class="btn btn-info btn-sm">Editar</a>
  </div>
  <div class="col-1">
    <a href="{{route('profesor.destroy',$professor->id)}}" class="btn btn-danger btn-sm">Eliminar</a>
  </div>
</div>


@endsection