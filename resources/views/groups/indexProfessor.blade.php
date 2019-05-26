@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Grupos</h1>
    <table class="table">
  <thead>
    <tr>
      <th>Materia</th>
      <th>Horario</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($groups as $group)
    <tr>
      <td>{{$group->subject->name}}</td>
      <td>{{$group->day->name.":".$group->schedule->name}}</td>
      <td class="text-right">
      @if(Session::get('type') == 'p')
      <a href="{{route('showGroup',$group->id)}}">
      @else
      <a href="{{route('showStudentGroup',$group)}}">
      @endif
        <button type="button" rel="tooltip" class="btn btn-info btn-sm">detalle
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