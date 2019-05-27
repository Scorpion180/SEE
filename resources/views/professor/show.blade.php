@extends('layouts.black')

@section('content')
@extends('layouts.black')

@section('content')
    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th>
                Perfil del Profesor
              </th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="link">
                Nombre
              </th>
              <th>
                {{$professor->user->name_upper}}
              </th>
              <th class="link">Codigo</th>
              <th>{{$professor->id}}</th>
            </tr>
            <tr>
                <th class="link">
                  Correo
                </th>
                <th>
                  {{$professor->user->email}}
                </th>
                <th class="link">Departamento</th>
                <th>{{$professor->department->name}}</th>
              </tr>
              <tr>
                <th class="link">
                  Usuario
                </th>
                <th>
                  {{$professor->user->username}}
                </th>
                <th></th>
              <th></th>
              </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>
                  <a href="{{route('profesor.edit',$professor->id)}}">
                      <button type="button" rel="tooltip" class="btn btn-info btn-sm"> 
                          <i class="tim-icons icon-settings"></i>
                      </button>
                  </a>
              </th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
@endsection
@endsection