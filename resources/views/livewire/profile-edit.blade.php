<div class="container-fluid d-flex align-items-center">
    <div class="row">
        <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola! {{ auth()->user()->name }}</h1>
            <p class="text-white mt-0 mb-5">Este es tu perfil de usuario. Puedes ver la información de tu cuenta y
                editarla si lo
                deseas.</p>
            </p>
            <a href="{{ route('profile.edit') }}" class="btn btn-info" wire:navigate>Editar Perfil</a>
        </div>
    </div>
</div>
