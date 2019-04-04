@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Usuario</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
  </tbody>
  <a href="{{route('usuario.edit',$user->id)}}" class="btn btn-sm btn-success">Editar</a>
  <form action="{{route('usuario.destroy',$user->id)}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-danger">Borrar</button>
  </form>
</table>
    </div>
</div>
@endsection