
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del Juez"
                    value="{{ old('name', $judges->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="text" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar la edad del Juez"
                    value="{{ old('age', $judges->age) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Género</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione el género</option>
                    <option value="Masculino" {{ old('gender', $judges->gender ?? '') == 'Masculino' ? 'selected': '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $judges->gender ?? '') == 'Femenino' ? 'selected': '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification_card">Identificación</label>
                <input type="text" id="identification_card" name="identification_card" class="form-control form-control-alternative"
                    placeholder="Ingresar el Identificación del Juez"
                    value="{{ old('identification_card', $judges->identification_card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Número de Telefono</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative"
                    placeholder="Ingresar el número de telefono del Juez"
                    value="{{ old('phone_number', $judges->phone_number) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Ingresar el email del Juez"
                    value="{{ old('email', $judges->email) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="place_birth">Lugar de Nacimiento</label>
                <select name="place_birth" id="place_birth" class="form-control">
                    <option value="" disabled>Seleccione El Lugar de Nacimiento del Juez</option>
                    <option value="Ocotal" {{ old('place_birth', $judges->place_birth ?? '') == 'Ocotal' ? 'selected': '' }}>Ocotal</option>
                    <option value="Wiwili" {{ old('place_birth', $judges->place_birth ?? '') == 'Wiwili' ? 'selected': '' }}>Wiwili</option>
                    <option value="Condega" {{ old('place_birth', $judges->place_birth ?? '') == 'Condega' ? 'selected': '' }}>Condega</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="department">Departamento</label>
                <select name="department" id="department" class="form-control">
                    <option value="" disabled>Seleccione El Departamento del Juez</option>
                    <option value="Esteli" {{ old('department', $judges->department ?? '')=='Esteli' ? 'selected': ''}}>Esteli</option>
                    <option value="Managua" {{ old('department', $judges->department ?? '')=='Managua' ? 'selected': ''}}>Managua</option>
                    <option value="León" {{ old('department', $judges->department ?? '')=='León' ? 'selected': ''}}>León</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="residence">Residencia</label>
                <select name="residence" id="residence" class="form-control">
                    <option value="" disabled>Seleccione La Residencia del Juez</option>
                    <option value="Masaya" {{ old('residence', $judges->residence ?? '')=='Masaya' ? 'selected': ''}}>Masaya</option>
                    <option value="Esteli" {{ old('residence', $judges->residence ?? '')=='Esteli' ? 'selected': ''}}>Esteli</option>
                    <option value="León" {{ old('residence', $judges->residence ?? '')=='León' ? 'selected': ''}}>León</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>Seleccione La Etnia del Juez</option>
                    <option value="Mestizos" {{ old('ethnicity', $judges->ethnicity ?? '')=='Mestizos' ? 'selected': ''}}>Mestizos</option>
                    <option value="Miskitos" {{ old('ethnicity', $judges->ethnicity ?? '')=='Miskitos' ? 'selected': ''}}>Miskitos</option>
                    <option value="Chorotegas" {{ old('ethnicity', $judges->ethnicity ?? '')=='Chorotegas' ? 'selected': ''}}>Chorotegas</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar la dirección del Juez"
                    value="{{ old('address', $judges->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value="" disabled>Seleccione la Nacionalidad del Juez</option>
                    <option value="Nicaragüense" {{ old('nationality', $judges->nationality ?? '')=='Nicaragüense' ? 'selected': ''}}>Nicaragüense</option>
                    <option value="Estadounidense" {{ old('nationality', $judges->nationality ?? '')=='Estadounidense' ? 'selected': ''}}>Estadounidense</option>
                    <option value="Costarricense" {{ old('nationality', $judges->nationality ?? '')=='Costarricense' ? 'selected': ''}}>Costarricense</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Pais</label>
                <select name="country" id="country" class="form-control">
                    <option value="" disabled>Seleccione El Pais del Juez</option>
                    <option value="Nicaragua" {{ old('country', $judges->country ?? '')=='Nicaragua' ? 'selected': ''}}>Nicaragua</option>
                    <option value="España" {{ old('country', $judges->country ?? '')=='España' ? 'selected': ''}}>España</option>
                    <option value="México" {{ old('country', $judges->country ?? '')=='México' ? 'selected': ''}}>México</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione su Estado Civil del Juez</option>
                    <option value="Soltero/a" {{ old('marital_status', $judges->marital_status ?? '')=='Soltero/a' ? 'selected': ''}}>Soltero/a</option>
                    <option value="Casado/a" {{ old('marital_status', $judges->marital_status ?? '')=='Casado/a' ? 'selected': ''}}>Casado/a</option>
                    <option value="viudo/a" {{ old('marital_status', $judges->marital_status ?? '')=='viudo/a' ? 'selected': ''}}>viudo/a</option>
                    <option value="Divorciado/a" {{ old('marital_status', $judges->marital_status ?? '')=='Divorciado/a' ? 'selected': ''}}>Divorciado/a</option>
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
            <i class="fas fa-save"></i> Guardar Juez
        </button>
    </div>
</div>
