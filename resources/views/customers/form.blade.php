
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del Cliente"
                    value="{{ old('name', $customers->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="text" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar la edad del Cliente"
                    value="{{ old('age', $customers->age) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Género</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione el género</option>
                    <option value="Masculino" {{ old('gender', $customers->gender ?? '') == 'Masculino' ? 'selected': '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $customers->gender ?? '') == 'Femenino' ? 'selected': '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_birth">Fecha de Nacimiento del Cliente</label>
                <input type="date" id="date_birth" name="date_birth" class="form-control form-control-alternative"
                    placeholder="Ingresar la Fecha de Nacimiento del Cliente"
                    value="{{ old('date_birth', $customers->date_birth) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar la dirección del Cliente"
                    value="{{ old('address', $customers->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification_card">Identificación</label>
                <input type="text" id="identification_card" name="identification_card" class="form-control form-control-alternative"
                    placeholder="Ingresar el Identificación del Cliente"
                    value="{{ old('identification_card', $customers->identification_card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Número de Telefono</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative"
                    placeholder="Ingresar el número de telefono del Cliente"
                    value="{{ old('phone_number', $customers->phone_number) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="place_birth">Lugar de Nacimiento</label>
                <select name="place_birth" id="place_birth" class="form-control">
                    <option value="" disabled>Seleccione El Lugar de Nacimiento del Cliente</option>
                    <option value="Ocotal" {{ old('place_birth', $customers->place_birth ?? '') == 'Ocotal' ? 'selected': '' }}>Ocotal</option>
                    <option value="Wiwili" {{ old('place_birth', $customers->place_birth ?? '') == 'Wiwili' ? 'selected': '' }}>Wiwili</option>
                    <option value="Condega" {{ old('place_birth', $customers->place_birth ?? '') == 'Condega' ? 'selected': '' }}>Condega</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="departments">Departamento</label>
                <select name="departments" id="departments" class="form-control">
                    <option value="" disabled>Seleccione El Departamento del Cliente</option>
                    <option value="Esteli" {{ old('departments', $customers->departments ?? '')=='Esteli' ? 'selected': ''}}>Esteli</option>
                    <option value="Managua" {{ old('departments', $customers->departments ?? '')=='Managua' ? 'selected': ''}}>Managua</option>
                    <option value="León" {{ old('departments', $customers->departments ?? '')=='León' ? 'selected': ''}}>León</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="residence">Residencia</label>
                <select name="residence" id="residence" class="form-control">
                    <option value="" disabled>Seleccione La Residencia del Cliente</option>
                    <option value="Esteli" {{ old('residence', $customers->residence ?? '')=='Esteli' ? 'selected': ''}}>Esteli</option>
                    <option value="Managua" {{ old('residence', $customers->residence ?? '')=='Managua' ? 'selected': ''}}>Managua</option>
                    <option value="León" {{ old('residence', $customers->residence ?? '')=='León' ? 'selected': ''}}>León</option>
                </select>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value="" disabled>Seleccione La Nacionalidad del Cliente</option>
                    <option value="Nicaragüense" {{ old('nationality', $customers->nationality ?? '')=='Nicaragüense' ? 'selected': ''}}>Nicaragüense</option>
                    <option value="Español" {{ old('nationality', $customers->nationality ?? '')=='Español' ? 'selected': ''}}>Español</option>
                    <option value="Peruano" {{ old('nationality', $customers->nationality ?? '')=='Peruano' ? 'selected': ''}}>Peruano</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Pais</label>
                <select name="country" id="country" class="form-control">
                    <option value="" disabled>Seleccione El Pais del Cliente</option>
                    <option value="Nicaragua" {{ old('country', $customers->country ?? '')=='Nicaragua' ? 'selected': ''}}>Nicaragua</option>
                    <option value="España" {{ old('country', $customers->country ?? '')=='España' ? 'selected': ''}}>España</option>
                    <option value="México" {{ old('country', $customers->country ?? '')=='México' ? 'selected': ''}}>México</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione su Estado Civil del Cliente</option>
                    <option value="Soltero/a" {{ old('marital_status', $customers->marital_status ?? '')=='Soltero/a' ? 'selected': ''}}>Soltero/a</option>
                    <option value="Casado/a" {{ old('marital_status', $customers->marital_status ?? '')=='Casado/a' ? 'selected': ''}}>Casado/a</option>
                    <option value="viudo/a" {{ old('marital_status', $customers->marital_status ?? '')=='viudo/a' ? 'selected': ''}}>viudo/a</option>
                    <option value="Divorciado/a" {{ old('marital_status', $customers->marital_status ?? '')=='Divorciado/a' ? 'selected': ''}}>Divorciado/a</option>
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
            <i class="fas fa-save"></i> Guardar Cliente
        </button>
    </div>
</div>
