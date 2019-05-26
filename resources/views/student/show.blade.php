@extends('layouts.black')

@section('content')
    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th>
                Perfil del alumno
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
                {{$student->user->name_upper}}
              </th>
              <th class="link">Codigo</th>
              <th>{{$student->id}}</th>
            </tr>
            <tr>
                <th class="link">
                  Correo
                </th>
                <th>
                  {{$student->user->email}}
                </th>
                <th class="link">Carrera</th>
                <th>{{$student->carrer->name}}</th>
              </tr>
              <tr>
                <th class="link">
                  Usuario
                </th>
                <th>
                  {{$student->user->username}}
                </th>
                <th></th>
              <th></th>
              </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>
                  <a href="{{route('student.edit',$student->id)}}">
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