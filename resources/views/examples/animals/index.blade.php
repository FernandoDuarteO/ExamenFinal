@extends('layouts.panel')
@section('title', 'Animal')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Animales</h3>
                        <a href="{{ route('animals.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Post
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-cubes"></i> Tipo</th>
                                <th scope="col"><i class="fas fa-palette"></i> Color</th>
                                <th scope="col"><i class="fas fa-birthday-cake"></i> Edad</th>
                                <th scope="col"><i class="fas fa-image"></i> Imagen</th>
                                <th scope="col"><i class="fas fa-tools"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animals as $animal)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $animal->id }} </span>
                                    </td>
                                    <td>
                                        {{ $animal->name }}
                                    </td>

                                    <td>
                                        {{ $animal->type }}
                                    </td>

                                    <td>
                                        {{ $animal->color }}
                                    </td>

                                    <td>
                                        {{ $animal->age }}
                                    </td>

                                    <td class="align-middle">
                                        <div class="d-flex align-items-center justify-content-center bg-light rounded"
                                            style="width: 100px; height: 100px; overflow: hidden;">
                                            <img src="{{ $animal->image() }}" alt="{{ $animal->name }}" class="img-fluid">
                                        </div>
                                    </td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('animals.show', $animal) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('animals.edit', $animal) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('animals.destroy', $animal->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;">
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
                        {{ $animals->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
