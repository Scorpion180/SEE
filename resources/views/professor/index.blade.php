@extends('layouts.black')

@section('content')

<div class="row">
    <div class="col-8 offset-2">
    <h1>Profesores</h1>
    <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($professors as $professor)
    <tr>
      <td>{{$professor->id}}</td>
      <td>{{$professor->User->name}}</td>
      <td class="text-right">
      <a href="{{route('profesor.show',$professor->id)}}">
        <button type="button" rel="tooltip" class="btn btn-info btn-sm">
          <i class="tim-icons icon-settings"></i>
        </button>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>


@endsection