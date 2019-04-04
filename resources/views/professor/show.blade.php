@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-10 offset-1">
    <h1>Profesores</h1>
    <table class="table">
  <thead>
    <tr>
      <th class="text-center">#</th>
      <th>Nombre</th>
      <th>E-mail</th>
      <th>Usuario</th>
      <th>Departamento</th>
      <th class="text-right"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center">{{$professor->id}}</td>
      <td>{{$professor->user->name}}</td>
      <td>{{$professor->user->email}}</td>
      <td>{{$professor->user->username}}</td>
      <td>{{$professor->department->name}}</td>
      <td class="td-actions text-right">
      <a href="{{route('profesor.edit',$professor->id)}}">
        <button type="button" rel="tooltip" class="btn btn-info btn-sm"> 
            <i class="tim-icons icon-settings"></i>
        </button>
      </a>
      <a href="{{route('profesor.destroy',$professor->id)}}">
        <button type="button" rel="tooltip" class="btn btn-danger btn-sm">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
      </a>
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
@endsection