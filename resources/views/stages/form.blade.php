<form action="{{ route('stages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="pl-lg-4">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="document_type">Tipo de documento</label>
                    <select name="document_type" id="document_type" class="form-control">
                        <option value="" disabled>Seleccione el tipo de documento</option>
                        <option value="Informe de actividades" {{ old('document_type', $stages->document_type ?? '') == 'Informe de actividades' ? 'selected': '' }}>Informe de actividades</option>
                        <option value="Problemas con contratos" {{ old('document_type', $stages->document_type ?? '') == 'Problemas con contratos' ? 'selected': '' }}>Problemas con contratos</option>
                        <option value="Mandato judicial" {{ old('document_type', $stages->document_type ?? '') == 'Mandato judicial' ? 'selected': '' }}>Mandato judicial</option>
                        <option value="Escrito de demanda" {{ old('document_type', $stages->document_type ?? '') == 'Escrito de demanda' ? 'selected': '' }}>Escrito de demanda</option>
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

        <div class="form-group">
            <label for="file">Archivo</label>
            <input type="file" name="file" id="file" class="form-control"
                   accept=".pdf,.doc,.docx,.xls,.xlsx" required>
            @if ($errors->has('file'))
                <span class="text-danger">{{ $errors->first('file') }}</span>
            @endif
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
</form>
