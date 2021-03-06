@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Departamentos</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($departments as $department)
    <tr>
      <td>{{$department->id}}</td>
      <td>{{$department->name}}</td>
      <td><a href="{{route('department.show',$department->id)}}" class="btn btn-info btn-sm">detalle</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>


@endsection