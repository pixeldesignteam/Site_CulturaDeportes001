<div class="col-sm-6 col-sm-offset-2" >



    <h1 class="mbr-header__text">Registra a un Alumno</h1>


    <?php echo form_open('CPProfesor/Bsalon/addAlumno'); ?>
        <div class="form-group">
            <label for="matricula">Matricula:</label>
            <input class="input-group" type="number" id="matricula" name="matricula" placeholder="Inglresa una Matricula" required="required" value="<?php echo set_value('nombre'); ?>">
        </div>



        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="input-group" type="text" id="nombre" name="nombre" placeholder="Inglresa un Nombre" required="required" value="<?php echo set_value('nombre'); ?>">
        </div>

        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input class="input-group" type="text" id="direccion" name="direccion" placeholder="Inglresa una Dirección" required="required">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input class="input-group" type="number" id="telefono" name="telefono" placeholder="Inglresa un Teléfono" required="required" value="<?php echo set_value('nombre'); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="input-group" type="email" id="email" name="email" placeholder="Inglresa un Email" required="required">
        </div>

        <div class="form-group">
            <label>Carrera: </label>
            <select required name="carrera">
                <option value="null">Selecciona uno</option>
                <option value="tic">TIC</option>
                <option value="pi">PI</option>
                <option value="dn">DN</option>
                <option value="ad">AD</option>
                <option value="idie">IDIE</option>
            </select>
        </div>



        <div class="form-group">
            <label>Nivel: </label>
            <select required name="nivel">
                <option value="null">Selecciona uno</option>
                <option value="ingenieria">Ingenieria</option>
                <option value="tsu">TSU</option>
            </select>
        </div>



        <div class="form-group">
            <label for="foto">Adjuntar una foto</label>
            <input type="file" id="foto" name="foto">
        </div>

        <div class="form-group">
            <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
        </div>

        <div class="form-group">
            <a href="<?php echo base_url(); ?>index.php/CPProfesor/Aplasticas/a_Plasticas"> <input type="button"  name="submit"  value="Cancelar" class="btn btn-danger btn-lg"  required="required" > </a>
        </div>

    </form>
</div>
