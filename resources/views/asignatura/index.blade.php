@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de asignaturas</h1>
        <a href="{{ route('asignatura.create') }}" class="btn btn-primary">Crear Asignatura</a>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>HT</th>
                <th>HP</th>
                <th>Horas Totales</th>
                <th>Objetivo</th>
            </thead>
            <tbody>

                @foreach ($asignaturas as $asignatura)
                    <tr>
                        <td>{{ $asignatura->id }}</td>
                        <td>{{ $asignatura->nombre }}</td>
                        <td>{{ $asignatura->cuatrimestre }}</td>
                        <td>{{ $asignatura->ht }}</td>
                        <td>{{ $asignatura->hp }}</td>
                        <td>{{ $asignatura->htotales }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
