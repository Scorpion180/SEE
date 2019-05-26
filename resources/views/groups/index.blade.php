@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Grupos</h1>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Materia</th>
      <th scope="col">Profesor</th>
      <th scope="col">Horario</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($groups as $group)
    <tr>
      <td>{{$group->subject->name}}</td>
      <td>{{$group->professor->user->name}}</td>
      <td>{{$group->day->name."-".$group->schedule->name}}</td>
      <td><a href="{{route('studentReg',$group->id)}}" class="btn btn-info btn-sm">Registrarse</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>


@endsection