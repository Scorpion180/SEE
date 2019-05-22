@extends('layouts.black')

@section('content')
<style>
div.a{
    font-size: 25px;
    text-align: center;
}
</style>
<div class="row">
    <div class="col-6">
        <div class="card card-plain">
            <div class="card-header a">
                Grupos
            </div>
            <div class="card-body">
                <div class="table-responsive ps">
                    <table class="table tablesorter">
                        <thead class="text-primary">
                            <tr>
                                <th>
                                    Materia
                                </th>
                                <th>
                                    Horario
                                </th>
                                <th>
                                    Aula
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Ingenieria de software
                                </td>
                                <td>
                                    11:00 - 13:00
                                </td>
                                <td>
                                    X-01
                                </td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-sm"> 
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection