
<!--
<form action="{{route('file.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-6">
            <div class="form-group"> 
                Selecciona<input class="button-sm form-control" multiple type="file" name="files[]">
            <input type="hidden" name="fileable_id" value='{{$fileable_id}}'>
            <input type="hidden" name="fileable_type" value='{{$fileable_type}}'>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <button type="submit" class="btn-sm btn-fill btn-primary">Save</button>
            </div>  
        </div>     
    </div>
</form> -->
{!! Form::open(['route' => 'file.store', 'files' => true, 'id' => 'form-archivo-upload']) !!}
<div class="form-group">
    <input type="hidden" name="fileable_id" value='{{$fileable_id}}'>
    <input type="hidden" name="fileable_type" value='{{$fileable_type}}'>
    <label for="archivos" class="col-form-label">Seleccione los archivos</label>
    {!! Form::file('files[]', ['multiple' => true], ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Subir', ['class' => 'btn-sm btn-success']) !!}

{!! Form::close() !!}