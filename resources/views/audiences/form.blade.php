
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción de la Audiencia</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar la descripción de la Audiencia"
                    value="{{ old('description', $audiences->description) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hall_id"><i class="fas fa-graduation-cap"></i>Sala</label>

                <select name="hall_id" id="hall_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar una Sala</option>
                    @foreach ($halls as $hall)
                        <option value="{{ $hall->id }}" @selected(old('hall_id', $hall->hall_id) == $hall->id)>
                            {{ $hall->room_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>


</div>

<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Audiencia
        </button>
    </div>
</div>
