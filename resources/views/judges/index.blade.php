@extends('layouts.panel')
@section('title', 'Juez')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Juez</h3>
                        <!-- <div class="btn-group mt-2 mt-0" role="group" aria-label="Botones de acción"> -->
                        <a href="{{ route('judges.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Juez
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del Juez</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Edad</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Género</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Identificación</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Número de Telefono</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Email</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Lugar de Nacimiento</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Departamento</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Residencia</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Pais</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Estado Civil</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($judges as $judge )
                        <tr>
                            <td> {{ $judge->name }}</td>
                            <td> {{ $judge->age }}</td>
                            <td> {{ $judge->gender }}</td>
                            <td> {{ $judge->identification_card }}</td>
                            <td> {{ $judge->phone_number }}</td>
                            <td> {{ $judge->email }}</td>
                            <td> {{ $judge->place_birth }}</td>
                            <td> {{ $judge->department }}</td>
                            <td> {{ $judge->residence }}</td>
                            <td> {{ $judge->country }}</td>
                            <td> {{ $judge->marital_status }}</td>


                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('judges.show', $judge->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('judges.edit', $judge->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('judges.destroy', $judge->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este Juez? Esta accion no se puede deshacer,');">
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
                    {{ $judges->links()}}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
