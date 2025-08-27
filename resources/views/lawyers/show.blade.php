@extends('layouts.panel')
@section('title', 'Abogado/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Abogado</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('lawyers.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información del Abogado</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="name">
                            <i class="fas fa-user"></i> Nombre Completo del Abogado
                        </label>
                        <p>{{ $lawyers->name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="age">
                            <i class="fas fa-user"></i> Edad del Abogado
                        </label>
                        <p>{{ $lawyers->age }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-user"></i> Género del Abogado
                        </label>
                        <p>{{ $lawyers->gender }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification_card">
                            <i class="fas fa-user"></i> Identificación del Abogado
                        </label>
                        <p>{{ $lawyers->identification_card }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="phone_number">
                            <i class="fas fa-user"></i> Número de Telefono del Abogado
                        </label>
                        <p>{{ $lawyers->phone_number }}</p>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="email">
                            <i class="fas fa-user"></i> Email del Abogado
                        </label>
                        <p>{{ $lawyers->email }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="place_birth">
                            <i class="fas fa-user"></i> Lugar de Nacimiento del Abogado
                        </label>
                        <p>{{ $lawyers->place_birth }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="department">
                            <i class="fas fa-user"></i> Departamento del Abogado
                        </label>
                        <p>{{ $lawyers->department }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="residence">
                            <i class="fas fa-user"></i> Residencia del Abogado
                        </label>
                        <p>{{ $lawyers->residence }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="ethnicity">
                            <i class="fas fa-user"></i> Etnia del Abogado
                        </label>
                        <p>{{ $lawyers->ethnicity }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-user"></i> Dirección del Abogado
                        </label>
                        <p>{{ $lawyers->address }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="nationality">
                            <i class="fas fa-user"></i> Nacionalidad del Abogado
                        </label>
                        <p>{{ $lawyers->nationality }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="country">
                            <i class="fas fa-user"></i> Pais del Abogado
                        </label>
                        <p>{{ $lawyers->country }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="marital_status">
                            <i class="fas fa-user"></i> Estado Civil del Abogado
                        </label>
                        <p>{{ $lawyers->marital_status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

