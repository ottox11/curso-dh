<small class="text-muted">Nombre de su mascota</small>


<p><?=$errors['nombre'][0]?></p>

<!-- <div class="row">
  <div class="col-md-5 mb-3">
    <label for="prov">Provincia</label>
    <select class="custom-select d-block w-100" id="prov">
      <option value="">Seleccione...</option>
      <option>C.A.B.A.</option>
      <option>Provincia de Buenos Aires</option>
      <option>Santa Fe</option>
    </select>
    <div class="invalid-feedback">
      Por favor seleccione una provincia.
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="sector">Barrio</label>
    <select class="custom-select d-block w-100" id="sector">
      <option value="">Seleccione...</option>
      <option>Palermo</option>
      <option>Almagro</option>
      <option>Caballito</option>
    </select>
    <div class="invalid-feedback">
      Por favor seleccione un barrio.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="zip">Cod. Postal</label>
    <input type="text" class="form-control" id="zip" placeholder="">
    <div class="invalid-feedback">
      Zip requerido.
    </div>
  </div>
</div> -->

if (empty($_POST['apellido'])) {
  $errors ['apellido'] = ['Debe ingresar un apellido'];
}
