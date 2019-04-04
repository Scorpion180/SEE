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
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$department->id}}</td>
      <td>{{$department->name}}</td>
    </tr>
  </tbody>
</table>
    </div>
</div>
<div class="row">
  <div class="col-1 offset-2">
    <a href="{{route('department.edit',$department->id)}}" class="btn btn-info btn-sm">Editar</a>
  </div>
  <div class="col-1">
    <a href="{{route('department.destroy',$department->id)}}" class="btn btn-danger btn-sm">Eliminar</a>
  </div>
</div>


@endsection