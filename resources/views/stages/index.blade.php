@extends('layouts.panel')
@section('title', 'Etapa')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Etapa</h3>
                        <a href="{{ route('stages.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Etapa
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Tipo de documento</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Descripción</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Archivo</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Fecha del caso</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($stages as $stage )
                        <tr>
                            <td> {{ $stage->document_type }}</td>
                            <td> {{ $stage->description }}</td>
                            <td> {{ $stage->file }}</td>
                            <td> {{ $stage->created_at }}</td>

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('stages.show', $stage->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('stages.edit', $stage->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('stages.destroy', $stage->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta Etapa? Esta accion no se puede deshacer,');">
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
                    {{ $stages->links()}}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
