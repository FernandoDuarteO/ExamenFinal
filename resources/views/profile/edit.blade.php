@extends('layouts.panel')
@section('title', 'Profile')

@section('content')
    <div class="col-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Mi Cuenta</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('profile.index') }}" class="btn btn-sm btn-primary">Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Información del Usuario</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="username">Nombre</label>
                                    <input type="text" id="username" name="name"
                                        class="form-control form-control-alternative" placeholder="Nombre"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Correo</label>
                                    <input type="email" name="email" id="input-email"
                                        class="form-control form-control-alternative" placeholder="Correo"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-profile-image">Imagen</label>
                                    <input type="file" name="profile_image" id="input-profile-image"
                                        class="form-control form-control-alternative" placeholder="Imagen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr class="my-4" />
                <!-- Address -->
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <h6 class="heading-small text-muted mb-4">Contraseña</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Contraseña Actual</label>
                                    <input type="password" name="current_password" id="input-city"
                                        class="form-control form-control-alternative" placeholder="Contraseña Actual">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Nueva Contraseña</label>
                                    <input type="password" id="input-country" name="password"
                                        class="form-control form-control-alternative" placeholder="Nueva Contraseña">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Confirmar Contraseña</label>
                                    <input type="password" id="input-postal-code" name="password_confirmation"
                                        class="form-control form-control-alternative" placeholder="Confirmar Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
