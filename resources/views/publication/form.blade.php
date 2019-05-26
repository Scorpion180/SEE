@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                        <h5 class="title">Nueva publicación</h5>
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
                        @if(isset($publication))
                        <form action="{{route('publication.update',$publication->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        @else
                            <form action="{{route('publication.store')}}" method="POST">
                        @endif
                        @csrf
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    <div class="form-group">
                                        <label for="Nombre">Título</label>
                                        <input type="text" class="form-control" name="title" value="{{$publication->title ?? ''}}{{ old('title') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 px-md-6">
                                    <div class="form-group">
                                        <label for="Descripcion">Descripción</label>
                                        <textarea rows = "5" name = "description" class="form-control" value="{{ isset($publication) ? $publication->description : '' }}{{ old('description') }}">
                                        </textarea>
                                        <input type="hidden" class="form-control" name="group_id" value="{{$id ?? ''}}{{ old('group_id') }}">
                                    </div>
                                </div>
                            </div>
                            @if(isset($publication))
                            <div class="row">
                                <div class="col-md-4 pr-md-4">
                                    <div class="form-group">
                                        <label for="Archivos">Archivos</label>
                                        @include('file.fileUpload',['fileable_id'=>$publication->id,'fileable_type'=>'Publication'])
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
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