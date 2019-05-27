@extends('layouts.black')

@section('content')
<div class="page-header">
    <h1>Registro de grupos</h1>
</div>
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

                        @if(isset($group))
                        <form action="{{route('group.update',$group)}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        @else
                            <form action="{{route('group.store')}}" method="POST">
                        @endif
                        @csrf
                            <div class="row">
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                    <label for="Materia">Materia</label>
                                        <select name="subject_id" class="form-control">
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}" {{ isset($group) && 
                                            $group->subject_id == $subject->id ? 'selected' : '' }}>
                                            {{$subject->name}}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-md-1">
                                    <div class="form-group">
                                    <label for="Horario">Horario</label>
                                        <select name="schedule_id" class="form-control">
                                        @foreach($schedules as $schedule)
                                            <option value="{{$schedule->id}}" {{ isset($group) && 
                                            $group->schedule_id == $schedule->id ? 'selected' : '' }}>
                                            {{$schedule->name}}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                <label for="Dia">Día</label>
                                        <select name="day_id" class="form-control">
                                        @foreach($days as $day)
                                            <option value="{{$day->id}}" {{ isset($group) && 
                                            $group->day_id == $day->id ? 'selected' : '' }}>
                                            {{$day->name}}
                                        </option>
                                        @endforeach
                                        </select>
                                </div>
                                </div>
                                <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                <label for="Aula">Aula</label>
                                        <select name="classroom_id" class="form-control">
                                        @foreach($classrooms as $classroom)
                                            <option value="{{$classroom->id}}" {{ isset($group) && 
                                            $group->classroom_id == $classroom->id ? 'selected' : '' }}>
                                            {{$classroom->module."-".$classroom->classroom}}
                                        </option>
                                        @endforeach
                                        </select>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label for="Codigo del profesor">Codigo del profesor</label>
                                    <input type="text" class="form-control" name="professor_id" value="{{$professor->id}}" readonly="true">
                                </div>
                                </div>
                                <div class="col-md-6 pr-md-1">
                                <label for="Nombre">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_name" value="{{$user->name}}" disabled>
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