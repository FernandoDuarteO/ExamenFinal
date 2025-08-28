@extends('layouts.panel')
@section('title', 'Sala/Show')

@section('content')
    <div class="col-x1-x12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Sala</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('halls.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="heading-small text-muted mb-4">Información de la Sala</h6>
        <div class="pl-lg-4">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="room_name">
                            <i class="fas fa-home"></i> Nombre de la Sala
                        </label>
                        <p>{{ $halls->room_name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="location_room">
                            <i class="fas fa-map-marker-alt"></i> Ubicación de la Sala
                        </label>
                        <p>{{ $halls->location_room }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code_room">
                            <i class="fas fa-lock"></i> Código de la Sala
                        </label>
                        <p>{{ $halls->code_room }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="student_id" class="form-control-label">
                            <i class="fas fa-user-tie"></i> Nombre del Juez
                        </label>
                        <p>{{ $halls->judge->name }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
