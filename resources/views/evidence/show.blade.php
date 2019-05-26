@extends('layouts.black')

@section('content')

<div class="row">
        <div class="col-10 offset-1">
        <table class="table">
      <tbody>
        <tr>
            <td width="10%">Título</td>
            <td>{{$evidence->name}}</td>
        </tr>
        <tr>
            <td width="10%">Fecha límite</td>
            <td>{{$evidence->due_date}}</td>
        </tr>
        <tr>
            <td width="10%">Descripción</td>
            <td>{{$evidence->description}}</td>
        </tr>
      </tbody>
      <tfoot>
        @if(Session::get('type') == 'p')
          <tr>
              <td></td>
              <td class="td-actions text-right">
                    <a href="{{route('evidence.edit',$evidence)}}">
                        <button type="button" rel="tooltip" class="btn btn-info btn-sm"> 
                            <i class="tim-icons icon-settings"></i>
                        </button>
                    </a>
                    <a href="{{route('evidence.destroy',$evidence)}}">
                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </a>
              </td>
          </tr>
          @else
          <tr>
              <td>
                <a href="{{route('submitEvidence',['evidence_id'=>$evidence->id,'user_id'=>Auth::user()->id])}}">
                    <button type="button" rel="tooltip" class="btn btn-info btn-sm"> 
                        Entregar
                    </button>
                </a>
            </td>
        </tr>
          @endif

      </tfoot>
    </table>
    @if(Session::get('type') == 'p')
    <table class="table">
        <thead>
            <tr>
                <td>
                    <label for="Entregadas">Evidencias entregadas</label>
                </td>
                <td>
                </td>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($evidence->files as $item)
                <tr>
                    <td>
                        <a class="link" href="{{route('file.show',$item)}}">{{$item->name}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
        </div>
    </div>

@endsection

      