@extends('layouts.panel')
@section('title', 'Juez/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Juez</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('judges.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información del Juez</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="name">
                            <i class="fas fa-user"></i> Nombre Completo del Juez
                        </label>
                        <p>{{ $judges->name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="age">
                            <i class="fas fa-user"></i> Edad del Juez
                        </label>
                        <p>{{ $judges->age }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-user"></i> Género del Juez
                        </label>
                        <p>{{ $judges->gender }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification_card">
                            <i class="fas fa-user"></i> Identificación del Juez
                        </label>
                        <p>{{ $judges->identification_card }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="phone_number">
                            <i class="fas fa-user"></i> Número de Telefono del Juez
                        </label>
                        <p>{{ $judges->phone_number }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="email">
                            <i class="fas fa-user"></i> Email del Juez
                        </label>
                        <p>{{ $judges->email }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="place_birth">
                            <i class="fas fa-user"></i> Lugar de Nacimiento del Juez
                        </label>
                        <p>{{ $judges->place_birth }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="department">
                            <i class="fas fa-user"></i> Departamento del Juez
                        </label>
                        <p>{{ $judges->department }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="residence">
                            <i class="fas fa-user"></i> Residencia del Juez
                        </label>
                        <p>{{ $judges->residence }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="ethnicity">
                            <i class="fas fa-user"></i> Etnia del Juez
                        </label>
                        <p>{{ $judges->ethnicity }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-user"></i> Dirección del Juez
                        </label>
                        <p>{{ $judges->address }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="nationality">
                            <i class="fas fa-user"></i> Nacionalidad del Juez
                        </label>
                        <p>{{ $judges->nationality }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="country">
                            <i class="fas fa-user"></i> Pais del Juez
                        </label>
                        <p>{{ $judges->country }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="marital_status">
                            <i class="fas fa-user"></i> Estado Civil del Juez
                        </label>
                        <p>{{ $judges->marital_status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

