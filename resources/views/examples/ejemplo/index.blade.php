@extends('layouts.panel')
@section('title', 'Ejemplo')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Tabla Ejemplo</h3>
                        <a href="{{ route('ejemplo.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Ejemplo
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-hashtag"></i> ID</th>
                                <th scope="col"><i class="fas fa-signature"></i> Numero</th>
                                <th scope="col"><i class="fas fa-toggle-on"></i> Capacidad</th>
                                <th scope="col"><i class="fas fa-toggle-on"></i> Tipo</th>
                                <th scope="col"><i class="fas fa-toggle-on"></i> Precio</th>
                                <th scope="col"><i class="fas fa-toggle-on"></i> Estado</th>
                                <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="badge badge-pill badge-primary"> 1 </span>
                                </td>
                                <td>
                                    A1
                                </td>

                                <td>
                                    2 Personas
                                </td>

                                <td>
                                    Pareja
                                </td>

                                <td>
                                    C$ 80.99
                                </td>

                                <td class="d-none d-lg-table-cell">
                                    <span class="badge badge-dot mr-4">
                                        <span class="badge badge-success">Disponible</span>
                                    </span>
                                </td>
                                <td>
                                    21/05/2024
                                </td>
                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('ejemplo.show') }}" class="btn btn-primary btn-sm"
                                        style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i> Mostrar
                                    </a>
                                    <a href="{{ route('ejemplo.edit') }}" class="btn btn-info btn-sm"
                                        style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <form action="#" method="POST"
                                        style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $ejemplo->links() }}
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
