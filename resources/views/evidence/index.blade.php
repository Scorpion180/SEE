@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <h1>Evidencias</h1>
    <table class="table">
  <thead>
    <tr>
      <th>Título</th>
      <th>Fecha límite</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($evidences as $evidence)
    <tr>
      <td>{{$evidence->name}}</td>
      <td>{{$evidence->due_date}}</td>
      <td class="text-right">
      <a href="{{route('evidence.show',$evidence->id)}}">
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