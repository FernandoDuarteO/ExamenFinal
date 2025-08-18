@extends('layouts.panel')
@section('title', 'Sala')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Sala</h3>
                        <a href="{{ route('halls.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Sala
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre de la Sala</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Ubicación de la Sala</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Código de la Sala</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del Juez</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($halls as $hall)
                        <tr>
                            <td> {{ $hall->room_name }}</td>
                            <td> {{ $hall->location_room }}</td>
                            <td> {{ $hall->code_room }}</td>
                            <td> {{ $hall->judge->name }}</td>
                            
                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('halls.show', $hall->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('halls.edit', $hall->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('halls.destroy', $hall->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta sala? Esta accion no se puede deshacer,');">
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
                    {{ $halls->links() }}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
