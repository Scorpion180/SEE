@extends('layouts.black')

@section('content')
    <div class="row">
        <div class="col-4 offset-2">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            Título
                        </td>
                        <td>
                            {{$publication->title}}
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            Descripción
                        </td>
                        <td>
                           {{$publication->description}}
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            Archivos adjuntos
                        </td>
                        <td>
                            @foreach ($publication->files as $file)
                            <a class="link" href="{{route('file.show',$file)}}">{{$file->name}}</a>
                            @if(Session::get('type') == 'p')
                            {!! Form::open(['route' => ['file.destroy', $file], 'method' => 'delete']) !!}
                                    <button class="btn btn-sm btn-danger form-pill borrar-archivo" type="submit" id="archivo_{{ $file->id }}">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
                                    </button>
                                {!! Form::close() !!}
                            <br>
                            @endif    
                            @endforeach
                            @if(Session::get('type') == 'p')
                            <div class="form-group">
                                @include('file.fileUpload',['fileable_id'=>$publication->id,'fileable_type'=>'Publication'])
                            </div>
                            @endif
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr>
                        <td>
                                @if(Session::get('type') == 'p')
                                <a href="{{route('publication.edit',$publication->id)}}" class="btn btn-sm btn-success">
                                    Editar
                                </a>
                                @endif
                        </td>
                        <td>
                            @if(Session::get('type') == 'p')
                            <form action="{{route('publication.destroy',$publication->id)}}" method="POST">
                            @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger">Borrar</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection