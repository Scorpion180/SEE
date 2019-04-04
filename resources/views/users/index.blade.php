@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Usuarios</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
  @foreach($docs as $doc)
    <tr>
      <td>{{$doc->id}}</td>
      <td>{{$doc->name}}</td>
      <td>{{$doc->email}}</td>
      <td><a href="{{route('usuario.show',$doc->id)}}">detalle</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>


@endsection