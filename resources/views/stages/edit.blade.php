@extends('layouts.panel')

@section('title', 'Etapa/Actualizar')

@section('content')

<div class="col-x1-12 order-x1-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">  <i class="fas fa-plus-circle"> </i> Actualizar Etapa</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('stages.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body container-fluid">
            <!-- AGREGA enctype para permitir subir archivos -->
            <form action="{{ route("stages.update", $stages->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('stages.form')


                @if($stages->file)
                    <div class="form-group mt-3">
                        <label class="form-control-label" for="archivo_actual">
                            <i class="fas fa-paperclip"></i> Archivo actual
                        </label>
                        <p>
                            <a href="{{ asset('storage/' . $stages->file) }}" target="_blank">
                                {{ $stages->original_name ?? 'Descargar archivo' }}
                            </a>
                        </p>
                    </div>
                @endif

            </form>
        </div>
    </div>
</div>

@endsection
