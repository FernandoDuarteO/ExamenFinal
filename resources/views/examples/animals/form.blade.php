<h6 class="heading-small text-muted mb-4">Datos Principales</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="input-name">Nombre</label>
                <input type="text" id="input-name" name="name" class="form-control form-control-alternative"
                    placeholder="Nombre" value="{{ old('name', $animal->name ?? '') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="input-type">Tipo</label>
                <select id="input-type" name="type" class="form-control form-control-alternative">
                    <option value="">Seleccione un tipo</option>
                    <option value="Perro" {{ old('type', $animal->type ?? '') == 'Perro' ? 'selected' : '' }}>Perro
                    </option>
                    <option value="Gato" {{ old('type', $animal->type ?? '') == 'Gato' ? 'selected' : '' }}>Gato
                    </option>
                    <option value="Pájaro" {{ old('type', $animal->type ?? '') == 'Pájaro' ? 'selected' : '' }}>Pájaro
                    </option>
                    <option value="Reptil" {{ old('type', $animal->type ?? '') == 'Reptil' ? 'selected' : '' }}>Reptil
                    </option>
                    <option value="Pez" {{ old('type', $animal->type ?? '') == 'Pez' ? 'selected' : '' }}>Pez
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="input-color">Color</label>
                <input type="text" id="input-color" name="color" class="form-control form-control-alternative"
                    placeholder="Color" value="{{ old('color', $animal->color ?? '') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="input-age">Edad</label>
                <input type="number" id="input-age" name="age" min="1" max="255"
                    class="form-control form-control-alternative" placeholder="Edad"
                    value="{{ old('age', $animal->age ?? '') }}">
            </div>
        </div>
    </div>
</div>
<hr class="my-4" />
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-control-label" for="input-image">Imagen</label>
                <input type="file" id="input-image" name="image" class="form-control form-control-alternative">
            </div>
        </div>
    </div>
</div>
<hr class="my-4" />
<!-- Contenido -->
<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Registrar
        </button>
    </div>
</div>
