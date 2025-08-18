
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del Abogado"
                    value="{{ old('name', $lawyers->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="text" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar la edad del Abogado"
                    value="{{ old('age', $lawyers->age) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Género</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione el género</option>
                    <option value="Masculino" {{ old('gender', $lawyers->gender ?? '') == 'Masculino' ? 'selected': '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $lawyers->gender ?? '') == 'Femenino' ? 'selected': '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification_card">Identificación</label>
                <input type="text" id="identification_card" name="identification_card" class="form-control form-control-alternative"
                    placeholder="Ingresar el Identificación del Abogado"
                    value="{{ old('identification_card', $lawyers->identification_card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Número de Telefono</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative"
                    placeholder="Ingresar el número de telefono del Abogado"
                    value="{{ old('phone_number', $lawyers->phone_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Ingresar el email del Abogado"
                    value="{{ old('email', $lawyers->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="professional_code">Código Profesional</label>
                <input type="text" id="professional_code" name="professional_code" class="form-control form-control-alternative"
                    placeholder="Ingresar el código profesional del Abogado"
                    value="{{ old('professional_code', $lawyers->professional_code) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="place_birth">Lugar de Nacimiento</label>
                <select name="place_birth" id="place_birth" class="form-control">
                    <option value="" disabled>Seleccione El Lugar de Nacimiento del Abogado</option>
                    <option value="Ocotal" {{ old('place_birth', $lawyers->place_birth ?? '') == 'Ocotal' ? 'selected': '' }}>Ocotal</option>
                    <option value="Wiwili" {{ old('place_birth', $lawyers->place_birth ?? '') == 'Wiwili' ? 'selected': '' }}>Wiwili</option>
                    <option value="Condega" {{ old('place_birth', $lawyers->place_birth ?? '') == 'Condega' ? 'selected': '' }}>Condega</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="department">Departamento</label>
                <select name="department" id="department" class="form-control">
                    <option value="" disabled>Seleccione El Departamento del Abogado</option>
                    <option value="Esteli" {{ old('department', $lawyers->department ?? '')=='Esteli' ? 'selected': ''}}>Esteli</option>
                    <option value="Managua" {{ old('department', $lawyers->department ?? '')=='Managua' ? 'selected': ''}}>Managua</option>
                    <option value="León" {{ old('department', $lawyers->department ?? '')=='León' ? 'selected': ''}}>León</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Pais</label>
                <select name="country" id="country" class="form-control">
                    <option value="" disabled>Seleccione El Pais del Abogado</option>
                    <option value="Nicaragua" {{ old('country', $lawyers->country ?? '')=='Nicaragua' ? 'selected': ''}}>Nicaragua</option>
                    <option value="España" {{ old('country', $lawyers->country ?? '')=='España' ? 'selected': ''}}>España</option>
                    <option value="México" {{ old('country', $lawyers->country ?? '')=='México' ? 'selected': ''}}>México</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione su Estado Civil del Abogado</option>
                    <option value="Soltero/a" {{ old('marital_status', $lawyers->marital_status ?? '')=='Soltero/a' ? 'selected': ''}}>Soltero/a</option>
                    <option value="Casado/a" {{ old('marital_status', $lawyers->marital_status ?? '')=='Casado/a' ? 'selected': ''}}>Casado/a</option>
                    <option value="viudo/a" {{ old('marital_status', $lawyers->marital_status ?? '')=='viudo/a' ? 'selected': ''}}>viudo/a</option>
                    <option value="Divorciado/a" {{ old('marital_status', $lawyers->marital_status ?? '')=='Divorciado/a' ? 'selected': ''}}>Divorciado/a</option>
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
            <i class="fas fa-save"></i> Guardar Abogado
        </button>
    </div>
</div>
