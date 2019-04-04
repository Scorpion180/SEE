@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Estudiantes</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Usuario</th>
      <th scope="col">Carrera</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->user->name}}</td>
      <td>{{$student->user->email}}</td>
      <td>{{$student->user->username}}</td>
      <td>{{$student->carrer->name}}</td>
    </tr>
  </tbody>
</table>
    </div>
</div>
<div class="row">
  <div class="col-1 offset-2">
    <a href="{{route('student.edit',$student->id)}}" class="btn btn-info btn-sm">Editar</a>
  </div>
  <div class="col-1">
    <a href="{{route('student.destroy',$student->id)}}" class="btn btn-danger btn-sm">Eliminar</a>
  </div>
</div>


@endsection