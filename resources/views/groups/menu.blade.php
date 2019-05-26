@extends('layouts.black')

@section('content')
<div class="row">
    @if (isset($message))
        <div class="alert alert-primary" role="alert">
            Ya haz entregado esa evidencia
          </div>
    @endif
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Publicaciones
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Titulo</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($group->publication as $p)
                        <tr>
                            <td>
                                {{$p->title}}
                            </td>
                            <td>
                                <div class="text-right">
                                    <a href="{{route('publication.show',$p)}}">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                                            detalles
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                @if(Session::get('type') == 'p')
                <a href="{{route('addPublication',$group->id)}}">
                    <button type="button" class="btn btn-info btn-sm">
                        Nueva <br> publicación
                    </button>
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Evidencias
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Titulo</th>
                        <th>Fecha limite</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach ($group->evidence as $i)
                    @if(in_array($i->id,$a))
                    <tr>
                        <td>
                            {{$i->name}}
                        </td>
                        <td>
                            {{$i->due_date}}
                        </td>
                        <td>
                            <a href="#">
                                <button type="button" rel="tooltip" class="btn btn-sucess btn-sm">
                                    Entregada
                                </button>
                            </a>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td>
                            {{$i->name}}
                        </td>
                        <td>
                            {{$i->due_date}}
                        </td>
                        <td>
                            <a href="{{route('evidence.show',$i)}}">
                                <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                                    detalles
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                @if(Session::get('type') == 'p')
                <a href="{{route('createEvidence',$group->id)}}">
                    <button type="button" class="btn btn-info btn-sm">
                        Nueva <br> evidencia
                    </button>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection