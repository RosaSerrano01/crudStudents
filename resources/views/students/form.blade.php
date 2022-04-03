<form class="row g-3 needs-validation" novalidate>

<div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Código:</label>
<input type="text" class="form-control" id="validationTooltip01" name="code" value="{{ isset($student->code )?$student->code:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su código!
    </div>
    </div>
    <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Nombre:</label>
<input type="text" class="form-control" id="validationTooltip02" name="name" value="{{ isset($student->name )?$student->name:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Apellido:</label>
<input type="text" name="lastname" class="form-control" id="validationTooltip03" value="{{ isset($student->lastname )?$student->lastname:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Dirección:</label>
<input type="text" name="address" class="form-control" id="validationTooltip04" value="{{ isset ($student->address)?$student->address:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su dirección!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Teléfono:</label>
<input type="number" name="telephone" class="form-control" id="validationTooltip05" value="{{ isset($student->telephone )?$student->telephone:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su teléfono!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip06" class="form-label">Correo electrónico:</label>
<input type="text" name="email" class="form-control" id="validationTooltip06" value="{{ isset($student->email )?$student->email:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su correo electrónico!
    </div>
  </div>
<br><br>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>

