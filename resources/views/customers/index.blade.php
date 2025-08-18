@extends('layouts.panel')
@section('title', 'Cliente')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Clientes</h3>
                        <a href="{{ route('customers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Cliente
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del cliente</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Edad</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Género</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Dirección</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Identificación</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Número de Telefono</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Lugar de Nacimiento</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Departamento</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Pais</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Estado Civil</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($customers as $customer )
                        <tr>
                            <td> {{ $customer->name }}</td>
                            <td> {{ $customer->age }}</td>
                            <td> {{ $customer->gender }}</td>
                            <td> {{ $customer->address }}</td>
                            <td> {{ $customer->identification_card }}</td>
                            <td> {{ $customer->phone_number }}</td>
                            <td> {{ $customer->place_birth }}</td>
                            <td> {{ $customer->departments }}</td>
                            <td> {{ $customer->country }}</td>
                            <td> {{ $customer->marital_status }}</td>


                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este Cliente? Esta accion no se puede deshacer,');">
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
                    {{ $customers->links()}}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
