@extends('layouts.panel')
@section('title', 'Ejemplo/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i> Ver Ejemplo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('ejemplo.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="heading-small text-muted mb-4">Datos del Ejemplo</h6>
                        <div class="pl-lg-4">
                            <label class="form-control-label" for="name"><i class="fas fa-signature"></i> Nombre</label>
                            <p>Centro Tecnologico</p>

                            <label class="form-control-label" for="name"><i class="fas fa-graduation-cap"></i>
                                Direción</label>
                            <p>tanque verde</p>

                            <label class="form-control-label" for="name"><i class="fas fa-clock"></i> Teléfono</label>
                            <p>1246765344565</p>

                            <label class="form-control-label" for="name"><i class="fas fa-clock"></i> URL</label>
                            <p>http://sdmlsfnkajfn.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="heading-small text-muted mb-4">Datos Adicionales</h6>
                        <div class="pl-lg-4">
                            <label class="form-control-label" for="name"><i class="fas fa-chalkboard-teacher"></i>
                                Sectores</label>

                            <ul>
                                <li>Salud</li>
                                <li>Comercio</li>
                                <li>Industria</li>
                            </ul>

                            <label class="form-control-label" for="name"><i class="fas fa-calendar-alt"></i>
                                Municipio</label>
                            <p>Esteli</p>

                            <label class="form-control-label" for="name"><i class="fas fa-calendar-check"></i>
                                Descripción</label>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates
                                voluptatum. Quisquam, voluptates voluptatum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
