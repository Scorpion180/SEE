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
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->user->name}}</td>
      <td><a href="{{route('student.show',$student->id)}}" class="btn btn-info btn-sm">detalle</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>


@endsection