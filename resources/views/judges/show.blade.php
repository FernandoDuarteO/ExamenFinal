@extends('layouts.panel')
@section('title', 'Juez/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row aligb-items-center">
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
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->age }}</p> Edad del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->gender }}</p> Género del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification_card">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->identification_card }}</p> Identificación del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="phone_number">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->phone_number }}</p> Número de Telefono del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="email">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->email }}</p> Email del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="place_birth">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->place_birth }}</p> Lugar de Nacimiento del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="department">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->department }}</p> Dirección del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="residence">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->residence }}</p> Residencia del Juez
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="country">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->country }}</p> Pais del Juez
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="marital_status">
                            <i class="fas fa-user"></i>
                        </label>
                        <p>{{ $judges->marital_status }}</p> Estado Civil del Juez
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

