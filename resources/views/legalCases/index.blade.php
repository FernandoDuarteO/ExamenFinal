@extends('layouts.panel')
@section('title', 'Casos Legales')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Casos Legales</h3>
                        <div class="btn-group mt-2 mt-0" role="group" aria-label="Botones de acción">
                            <a href="{{ route('legal-cases.export.excel', ['current_status' => request('current_status')]) }}" class="btn btn-success">
                                <i class="fas fa-file-excel"></i> Exportar a Excel
                            </a>
                            <a href="{{ route('legalCases.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Nuevo Caso Legal
                            </a>
                        </div>
                    </div>

                    {{-- Filtro por estado --}}
                    <form method="GET" action="{{ route('legalCases.index') }}" class="mt-3 mb-0">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="current_status" class="form-control">
                                    <option value="">-- Todos los estados --</option>
                                    <option value="activo" {{ request('current_status') == 'activo' ? 'selected' : '' }}>Activo</option>
                                    <option value="cerrado" {{ request('current_status') == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                                    <option value="pendiente" {{ request('current_status') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Filtrar</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Numero de expediente</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Tipo de Caso</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Fecha Del Caso</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Estado del Caso</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Descripción del Caso</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Descripción de la Audiencia</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre de la Sala</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Etapa</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Etapa Descripción</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del Cliente</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del Abogado</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($legalCases as $legalCase)
                        <tr>
                            <td> {{ $legalCase->number_file }}</td>
                            <td> {{ $legalCase->type_case }}</td>
                            <td> {{ $legalCase->created_at }}</td>
                            <td> {{ ucfirst($legalCase->current_status) }}</td>
                            <td> {{ $legalCase->description }}</td>
                            <td> {{ $legalCase->audience->description ?? '-' }}</td>
                            <td> {{ $legalCase->hall->room_name ?? '-' }}</td>
                            <td> {{ $legalCase->stage->document_type ?? '-' }}</td>
                            <td> {{ $legalCase->stage->description ?? '-' }}</td>
                            <td> {{ $legalCase->customer->name ?? '-' }}</td>
                            <td> {{ $legalCase->lawyer->name ?? '-' }}</td>

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('legalCases.show', $legalCase->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('legalCases.edit', $legalCase->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('legalCases.destroy', $legalCase->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este caso legal? Esta accion no se puede deshacer,');">
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
                    {{ $legalCases->withQueryString()->links() }}
                </nav>
             </div>
         </div>
    </div>
</div>
@endsection