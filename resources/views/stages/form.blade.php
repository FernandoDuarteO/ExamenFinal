
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="document_type">Tipo de documento</label>
                <select name="document_type" id="document_type" class="form-control">
                    <option value="" disabled>Seleccione el tipo de documento</option>
                    <option value="Fotos" {{ old('document_type', $stages->document_type ?? '') == 'Fotos' ? 'selected': '' }}>Fotos</option>
                    <option value="Presentación de pruebas" {{ old('document_type', $stages->document_type ?? '') == 'Presentación de pruebas' ? 'selected': '' }}>Presentación de pruebas</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar la descripción del documento"
                    value="{{ old('description', $stages->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="file">Archivo</label>
                <input type="file" id="file" name="file" class="form-control form-control-alternative">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="case_date">Fecha del caso</label>
                <input type="datetime" id="case_date" name="case_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha del caso"
                    value="{{ old('case_date', $stages->case_date) }}">
            </div>
        </div>
    </div>

</div>


<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Etapa
        </button>
    </div>
</div>
