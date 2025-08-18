
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="room_name">Nombre de la Sala</label>
                <input type="text" id="room_name" name="room_name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre de la sala"
                    value="{{ old('room_name', $halls->room_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="location_room">Ubicación de la Sala</label>
                <input type="text" id="location_room" name="location_room" class="form-control form-control-alternative"
                    placeholder="Ingresar la ubicación de la sala"
                    value="{{ old('location_room', $halls->location_room) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_room">Código de la Sala</label>
                <input type="text" id="code_room" name="code_room" class="form-control form-control-alternative"
                    placeholder="Ingresar el código de la sala"
                    value="{{ old('code_room', $halls->code_room) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="judge_id"><i class="fas fa-graduation-cap"></i>Juez</label>

                <select name="judge_id" id="judge_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar un Juez</option>
                    @foreach ($judges as $judge)
                        <option value="{{ $judge->id }}" @selected(old('judge_id', $judge->judge_id) == $judge->id)>
                            {{ $judge->name }}
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
            <i class="fas fa-save"></i> Guardar Sala
        </button>
    </div>
</div>
