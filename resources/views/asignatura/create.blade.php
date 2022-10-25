@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Asignaturas</h1>

        <form action="{{ route('asignatura.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                </div>
            </div>

            <div class="mb-3">
                <label for="cuatrimestre" class="form-label">Cuatrimestre</label>
                <input type="text" class="form-control" id="cuatrimestre" placeholder="Cuatrimestre" name="cuatrimestre">
            </div>

            <div class="mb-3">
                <label for="ht" class="form-label">Horas teóricas</label>
                <input type="number" class="form-control" id="ht" name="ht">
            </div>

            <div class="mb-3">
                <label for="hp" class="form-label">Horas prácticas</label>
                <input type="number" class="form-control" id="hp" name="hp">
            </div>

            <div class="mb-3">
                <label for="htotales" class="form-label">Horas totales</label>
                <input type="number" class="form-control" id="htotales" name="htotales">
            </div>

            <div class="mb-3">
                <label for="hweek" class="form-label">Horas semanales</label>
                <input type="number" class="form-control" id="hweek" name="hweek">
            </div>

            <div class="form-group">
                <div class="mb-3">
                    <label for="goal" class="form-label">Objetivo</label>
                    <input type="text" class="form-control" id="goal" placeholder="Objetivo" name="goal">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
