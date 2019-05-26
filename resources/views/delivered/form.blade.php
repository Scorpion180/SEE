@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                        <h5 class="title">Entrega de {{$evidence->name}}</h5>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <table class="table">
                                <tbody>
                                    <tr class="form-group">
                                        <td>
                                            <label>Archivos</label>
                                            <div class="form-group">
                                                @include('file.fileUpload',['fileable_id'=>$evidence->id,'fileable_type'=>'Evidence'])
                                            </div>
                                        </td>
                                        <td>
                                            @foreach ($evidence->delivereds as $delivered)
                                            @foreach($delivered->files as $file)
                                            <a class="link" href="{{route('file.show',$file)}}">{{$file->name}}</a>
                                                {!! Form::open(['route' => ['file.destroy', $file], 'method' => 'delete']) !!}
                                                <button class="btn btn-sm btn-danger form-pill borrar-archivo" type="submit" id="archivo_{{ $file->id }}">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
                                                </button>
                                                    {!! Form::close() !!}
                                                <br>
                                            @endforeach
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="{{route('delivered.store')}}" method="POST">
                                    @csrf
                        <input type="hidden" name="evidence_id" value="{{$evidence->id}}">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection