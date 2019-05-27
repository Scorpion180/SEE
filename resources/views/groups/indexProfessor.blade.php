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
      <td>
        @if(Session::get('type') == 'p')
        {!! Form::open(['route' => ['group.destroy', $group], 'method' => 'delete']) !!}
          <button class="btn btn-sm btn-danger" type="submit">
            Borrar
          </button>
        {!! Form::close() !!}
        
        <td>
            <a href="{{route('group.edit',$group)}}">
                <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                  Editar
                </button>
            </a>
            </td>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <td>
            @if(Session::get('type') == 'p')
            <a href="{{route('group.create')}}">
                <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                  Nuevo
                </button>
            </a>
            @endif
            </td>
    </tr>
  </tfoot>
</table>
    </div>
</div>
@endsection