<form class="row g-3 needs-validation" novalidate>

<div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Código:</label>
<input type="text" class="form-control" id="validationTooltip01" name="code" placeholder="Ingrese su código..." value="{{ isset($student->code )?$student->code:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su código!
    </div>
    </div>
    <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Nombre:</label>
<input type="text" class="form-control" id="validationTooltip02" name="name" placeholder="Ingrese su nombre aquí..." value="{{ isset($student->name )?$student->name:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Apellido:</label>
<input type="text" name="lastname" placeholder="Ingrese su apellido aquí..." class="form-control" id="validationTooltip03" value="{{ isset($student->lastname )?$student->lastname:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Dirección:</label>
<input type="text" name="address" placeholder="Ingrese su dirección aquí..." class="form-control" id="validationTooltip04" value="{{ isset ($student->address)?$student->address:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su dirección!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Teléfono:</label>
<input type="text" pattern="^503\{8}$" name="telephone" placeholder="Ej. 503 70456034" class="form-control" id="validationTooltip05" value="{{ isset($student->telephone )?$student->telephone:'' }}" 
title="El número de teléfono no debe contener letras ni símbolos" required>
<div class="valid-tooltip">
      ¡Ingrese su teléfono!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip06" class="form-label">Correo electrónico:</label>
<input type="text" name="email" placeholder="Ej. nombre@gmail.com" class="form-control" id="validationTooltip06" value="{{ isset($student->email )?$student->email:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su correo electrónico!
    </div>
  </div>
<br><br>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
