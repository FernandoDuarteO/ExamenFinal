@extends('layouts.panel')
@section('title', 'Casos Legales/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Caso Legal</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('legalCases.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información del Caso Legal</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="number_file">
                            <i class="fas fa-hashtag"></i> Número de expediente
                        </label>
                        <p>{{ $legalCases->number_file }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="type_case">
                            <i class="fas fa-user"></i> Tipo de Caso
                        </label>
                        <p>{{ $legalCases->type_case }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="current_status">
                            <i class="fas fa-user"></i> Estado del Caso
                        </label>
                        <p>{{ $legalCases->current_status }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="description">
                            <i class="fas fa-user"></i> Descripción del Caso
                        </label>
                        <p>{{ $legalCases->description }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Descripción de la Audiencia</i>
                        </label>
                        <p>{{ $legalCases->audience->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Nombre del Sala</i>
                        </label>
                        <p>{{ $legalCases->hall->room_name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Etapa</i>
                        </label>
                        <p>{{ $legalCases->stage->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Nombre del Cliente</i>
                        </label>
                        <p>{{ $legalCases->customer->name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Nombre del Abogado</i>
                        </label>
                        <p>{{ $legalCases->lawyer->name }}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
