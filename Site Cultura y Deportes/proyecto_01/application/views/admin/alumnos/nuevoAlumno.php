
<div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
    <div class="col-md-12 text-center">
  <div class="form-title">
    <h4>Nuevo Alumno :</h4>
  </div>
  <div class="row">
    <tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Alumnos/getAlumno">Regresar</a></td></tr>
  </div>
  <br>
  <div class="form-body">
    <?php echo form_open_multipart('CA/Alumnos/addAlumno');?>
      <div class="form-group">
        <input type="text" name="matricula" class="form-control" id="inputName" placeholder="Matricula" required>
      </div>
      <div class="form-group">
        <input type="file" name="foto" class="form-control" id="inputName" placeholder="Foto" required>
      </div>
      <div class="form-group">
        <input type="text" name="nombreAlumno" class="form-control" id="inputName" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <input type="text" name="direccion" class="form-control" id="inputName" placeholder="Direccion" required>
      </div>
      <div class="form-group">
        <input type="text" name="telefono" class="form-control" id="inputName" placeholder="Telefono" required>
      </div>

      <label  for="carrera">Carrera</label>
      <center><div class="form-group input-group">
        <select required name="carrera" required>
        <option value=null>Selecciona uno</option>
        <option value="TI">TI</option>
        <option value="PI">PI</option>
        <option value="AD">AD</option>
        <option value="DN">DN</option>

        </select>
      </div></center>

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
      </div>
      <label  for="carrera">Beca</label>
      <center><div class="form-group input-group">
        <select required name="nombreBeca" required>
        <option value=null>Selecciona una</option>
        <option value="NINGUNA">NINGUNA</option>
        <option value="INTERNA">INTERNA</option>
        <option value="MANUTENCIÓN">MANUTENCIÓN</option>

        </select>
      </div></center>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
</div>


</div>
