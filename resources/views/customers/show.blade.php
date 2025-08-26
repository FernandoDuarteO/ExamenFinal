@extends('layouts.panel')
@section('title', 'Cliente/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Juez</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('customers.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información del Cliente</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="name">
                            <i class="fas fa-user"></i> Nombre Completo del Cliente
                        </label>
                        <p>{{ $customers->name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="age">
                            <i class="fas fa-user"></i> Edad del Cliente
                        </label>
                        <p>{{ $customers->age }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-user"></i> Género del Cliente
                        </label>
                        <p>{{ $customers->gender }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="date_birth">
                            <i class="fas fa-user"></i> Fecha de Nacimiento del Cliente
                        </label>
                        <p>{{ $customers->date_birth }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-user"></i> Dirección del Cliente
                        </label>
                        <p>{{ $customers->address }}</p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification_card">
                            <i class="fas fa-user"></i> Identificación del Cliente
                        </label>
                        <p>{{ $customers->identification_card }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="phone_number">
                            <i class="fas fa-user"></i> Número de Telefono del Cliente
                        </label>
                        <p>{{ $customers->phone_number }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="place_birth">
                            <i class="fas fa-user"></i> Lugar de Nacimiento del Cliente
                        </label>
                        <p>{{ $customers->place_birth }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="departments">
                            <i class="fas fa-user"></i> Departamento del Cliente
                        </label>
                        <p>{{ $customers->departments }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="residence">
                            <i class="fas fa-user"></i> Residencia del Cliente
                        </label>
                        <p>{{ $customers->residence }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="nationality">
                            <i class="fas fa-user"></i> Nacionalidad del Cliente
                        </label>
                        <p>{{ $customers->nationality }}</p>
                    </div>
                </div>
            </div>

           <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="country">
                            <i class="fas fa-user"></i> Pais del Cliente
                        </label>
                        <p>{{ $customers->country }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="marital_status">
                            <i class="fas fa-user"></i> Estado Civil del Cliente
                        </label>
                        <p>{{ $customers->marital_status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

