@extends('layouts.panel')
@section('title', 'Audiencia/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Audiencia</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('audiences.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información de la Audiencia</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="description">
                            <i class="fas fa-user"></i> Descripción de la Audiencia
                        </label>
                        <p>{{ $audiences->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user">Nombre del Sala</i>
                        </label>
                        <p>{{ $audiences->hall->room_name }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
