@extends('layouts.black')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
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

                        @if(isset($evidence))
                        <form action="{{route('evidence.update',$evidence->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        @else
                            <form action="{{route('evidence.store')}}" method="POST">
                        @endif
                        @csrf
                            <div class="row">
                                <div class="col-md-12 pr-md-1">
                                    <div class="form-group">
                                    <label for="Titulo">Título</label>
                                    <input type="text" class="form-control" name="name" value="{{ isset($evidence) ? $evidence->name : '' }}{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                <label for="Descripción">Descripción</label>
                                <textarea name="description" class="form-control">@if(isset($evidence)){{$evidence->description}}{{ old('description') }}@endif</textarea>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label for="Fecha limite">Fecha limite</label>
                                    <input type="date" class="form-control" name="due_date" value="{{ isset($evidence) ? $evidence->due_date : '' }}{{ old('due_date') }}">
                                    <input type="hidden" class="form-control" name="group_id" value="{{ isset($evidence) ? $evidence->group_id : $group_id }}{{ old('due_date') }}">
                                </div>
                                </div>
                            </div>
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