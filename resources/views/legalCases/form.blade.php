
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="number_file">Número de Expediente</label>
                <input type="text" id="number_file" name="number_file" class="form-control form-control-alternative"
                    placeholder="Ingresar el número de expediente"
                    value="{{ old('number_file', $legalCases->number_file) }}">
            </div>
        </div>
    </div>
`
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_case">Tipo de Caso</label>
                <select name="type_case" id="type_case" class="form-control">
                    <option value="" disabled>Seleccione el tipo de caso</option>
                    <option value="Robo" {{ old('type_case', $legalCases->type_case ?? '') == 'Robo' ? 'selected': '' }}>Robo</option>
                    <option value="Feminicidio" {{ old('type_case', $legalCases->type_case ?? '') == 'Feminicidio' ? 'selected': '' }}>Feminicidio</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="current_status">Estado Actual</label>
                <select name="current_status" id="current_status" class="form-control">
                    <option value="" disabled>Seleccione el estado actual</option>
                    <option value="Activo" {{ old('current_status', $legalCases->current_status ?? '') == 'Activo' ? 'selected': '' }}>Activo</option>
                    <option value="Inactivo" {{ old('current_status', $legalCases->current_status ?? '') == 'Inactivo' ? 'selected': '' }}>Inactivo </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar la descripción"
                    value="{{ old('description', $legalCases->description) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="audience_id"><i class="fas fa-graduation-cap"></i>Audiencia</label>

                <select name="audience_id" id="audience_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar una Audiencia</option>
                    @foreach ($audiences as $audience)
                        <option value="{{ $audience->id }}" @selected(old('audience_id', $legalCases->audience_id ?? '') == $audience->id)>
                            {{ $audience->description }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hall_id"><i class="fas fa-graduation-cap"></i> Sala</label>

                <select name="hall_id" id="hall_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar una Sala</option>
                    @foreach ($halls as $hall)
                        <option value="{{ $hall->id }}" @selected(old('hall_id', $legalCases->hall_id ?? '') == $hall->id)>
                            {{ $hall->room_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="stage_id"><i class="fas fa-graduation-cap"></i> Etapa</label>

                <select name="stage_id" id="stage_id" class="form-control form-control-alternative">
                    <option disabled>Etapa</option>
                    @foreach ($stages as $stage)
                        <option value="{{ $stage->id }}" @selected(old('stage_id', $legalCases->stage_id ?? '') == $stage->id)>
                            {{ $stage->description }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_id"><i class="fas fa-graduation-cap"></i> Cliente</label>

                <select name="customer_id" id="customer_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar un Cliente</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @selected(old('customer_id', $legalCases->customer_id ?? '') == $customer->id)>
                            {{ $customer->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="lawyer_id"><i class="fas fa-graduation-cap"></i> Abogado</label>

                <select name="lawyer_id" id="lawyer_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar un Abogado</option>
                    @foreach ($lawyers as $lawyer)
                        <option value="{{ $lawyer->id }}" @selected(old('lawyer_id', $legalCases->lawyer_id ?? '') == $lawyer->id)>
                            {{ $lawyer->name }}
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
