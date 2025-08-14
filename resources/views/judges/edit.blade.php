@extends('layouts.panel')

@section('title', 'Juez/Actualizar')

@section('content')

<div class="col-x1-12 order-x1-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">  <i class="fas fa-plus-circle"> </i> Actualizar Juez</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('judges.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body container-fluid">
            <form action="{{ route("judges.update", $judges->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('judges.form')
            </form>
        </div>
    </div>
</div>

@endsection
