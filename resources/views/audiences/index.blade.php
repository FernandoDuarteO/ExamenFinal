@extends('layouts.panel')
@section('title', 'Audiencias')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Audiencias</h3>
                        <a href="{{ route('audiences.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Audiencia
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Descripcion de la Audiencia</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Fecha de la Audiencia</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del Sala</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($audiences as $audience)
                        <tr>
                            <td> {{ $audience->description }}</td>
                            <td> {{ $audience->created_at }}</td>
                            <td> {{ $audience->hall->room_name }}</td>
                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('audiences.show', $audience->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('audiences.edit', $audience->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('audiences.destroy', $audience->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta audiencia? Esta accion no se puede deshacer,');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>

             <div class="card-footer py-4">
                <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                    {{ $audiences->links() }}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
