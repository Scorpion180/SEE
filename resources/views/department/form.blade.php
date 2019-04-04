@extends('layouts.black')

@section('content')
<div class="page-header">
    <h1>Registro de departamentos</h1>
</div>
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                        <h5 class="title">Registro</h5>
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

                        @if(isset($department))
                        <form action="{{route('department.update',$department->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @else
                            <form action="{{route('department.store')}}" method="POST">
                        @endif
                        @csrf
                            <div class="row">
                                <div class="col-md-8 pr-md-1">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="name" value="{{$department->name ?? ''}}{{ old('name') }}">
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