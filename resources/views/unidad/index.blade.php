@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de asignaturas</h1>
        <a href="{{ route('unidad.create') }}" class="btn btn-primary">Crear Asignatura</a>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>ht</th>
                    <th>hp</th>
                    <th>asignatura_id</th>
                    <th>objetivo</th>
                    <th>resultado aprendizaje</th>
                    <th>secuencia aprendizaje</th>
                    <th>espacios formativos</th>
                    <th>Update</th>
                    <th>Del</th>
                </thead>
                <tbody>

                    @foreach ($unidades as $unidad)
                        <tr>
                            <td>{{ $unidad->id }}</td>
                            <td>{{ $unidad->nombre }}</td>
                            <td>{{ $unidad->ht }}</td>
                            <td>{{ $unidad->hp }}</td>
                            <td>{{ $unidad->asignatura_id }}</td>
                            <td>{{ $unidad->objetivo }}</td>
                            <td>{{ $unidad->resultado_aprendizaje }}</td>
                            <td>{{ $unidad->secuencia_aprendizaje }}</td>
                            <td>{{ $unidad->espacios_formativos }}</td>
                            <td>
                                <a href="http://" class="btn btn-warning">Update</a>
                            </td>

                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delAsig{{ $unidad->id }}">
                                    Del
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" role="dialog" id="delAsig{{ $unidad->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Borrar asignatura</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>
                                                    <p>¿Deseas eliminar la asignatura {{ $unidad->nombre }}?</p>
                                                </h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <form action="{{ route('unidad.destroy', $unidad->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $unidades->links() }}
        </div>
    </div>
@endsection
