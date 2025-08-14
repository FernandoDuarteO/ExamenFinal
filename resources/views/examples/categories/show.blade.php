@extends('layouts.panel')
@section('title', 'Category/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Categoria</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la Categoria</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="title"><i class="fas fa-heading"></i>
                                    Nombre</label>
                                <p>{{ $category->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="content"><i class="fas fa-align-left"></i>
                                    URL Amigable</label>
                                <p>{{ $category->slug }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date"><i class="fas fa-calendar-check"></i>
                                    Fecha de Registro</label>
                                <p>{{ $category->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
