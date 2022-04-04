<form class="row g-3 needs-validation" novalidate>

<div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Código:</label>
<input type="text" pattern="SM.+|sm.+" class="form-control" id="validationTooltip01" name="code" placeholder="Ingrese su código.sm.." minlength="10" maxlength="10"value="{{ isset($student->code )?$student->code:'' }}"
title="Debe comenzar con sm"required>
<div class="invalid-tooltip">
      ¡Ingrese su código!
    </div>
    </div>
    <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Nombre:</label>
<input type="text" pattern="[A-Z]{1}.+" class="form-control" id="validationTooltip02" name="name" placeholder="Ingrese su nombre aquí..." maxlength="15" value="{{ isset($student->name )?$student->name:'' }}" 
  title="Primera letra mayuscula" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Apellido:</label>
<input type="text" pattern="[A-Z]{1}.+" name="lastname" placeholder="Ingrese su apellido aquí..." class="form-control" id="validationTooltip03" maxlength="15"value="{{ isset($student->lastname )?$student->lastname:'' }}" 
title="Primera letra mayuscula" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Dirección:</label>
<input type="text" name="address" placeholder="Ingrese su dirección aquí..." class="form-control" id="validationTooltip04" maxlength="30" value="{{ isset ($student->address)?$student->address:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su dirección!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Teléfono:</label>
<input type="integer" pattern="^[7|6]\d{7}$" name="telephone" placeholder="Ej. 70456034" class="form-control" id="validationTooltip05" value="{{ isset($student->telephone )?$student->telephone:'' }}" 
title="El número de teléfono no debe contener letras ni símbolos y debe comenzar con el número 6 o 7" minlength="8" maxlength="8" required>
<div class="valid-tooltip">
      ¡Ingrese su teléfono!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip06" class="form-label">Correo electrónico:</label>
<input type="text" pattern=".+@gmail\.com" name="email" placeholder="Ej. nombre@gmail.com" class="form-control" id="validationTooltip06" value="{{ isset($student->email )?$student->email:'' }}"
title="El correo electrónico debe contener @gmail.com" required>
<div class="valid-tooltip">
      ¡Ingrese su correo electrónico!
    </div>
  </div>
<br><br>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
