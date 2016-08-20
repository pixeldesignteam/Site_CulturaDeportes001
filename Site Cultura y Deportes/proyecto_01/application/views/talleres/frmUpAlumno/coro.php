<div class="col-sm-6 col-sm-offset-2" >



    <h1 class="mbr-header__text">Actualizar Alumno</h1>


    <?php echo form_open('CPProfesor/Coro/upAlumno'); ?>

    <?php foreach($al as $alum){ ?>
        <input type="text" name ="id" hidden value="<?php echo $alum->id_alumno; ?>">

        <div class="form-group">
            <label for="matricula">Matricula:</label>
            <input class="input-group" type="numbre" id="matricula" name="matricula" required="required" value="<?php echo $alum->matricula; ?>">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="input-group" type="text" id="nombre" name="nombre"  required="required" value="<?php echo $alum->nombre_alumno; ?>">
        </div>


        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input class="input-group" type="text" id="direccion" name="direccion"  required="required" value="<?php echo $alum->direccion; ?>">
        </div>


        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input class="input-group" type="text" id="telefono" name="telefono"  required="required" value="<?php echo $alum->telefono; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="input-group" type="email" id="email" name="email"  required="required" value="<?php echo $alum->email; ?>">
        </div>


        <div class="form-group">
            <label>Carrera: </label>
            <select name="carrera">
                <option value="<?php echo $alum->carrera; ?>"></option>
                <option value="tic">TIC</option>
                <option value="pi">PI</option>
                <option value="dn">DN</option>
                <option value="ad">AD</option>
                <option value="idie">IDIE</option>
            </select>
        </div>

        <div class="form-group">
            <label>Nivel: </label>
            <select name="nivel">
                <option value="<?php echo $alum->nivel; ?>"></option>
                <option value="ingenieria">Ingenieria</option>
                <option value="tsu">TSU</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="input-group" type="text" id="email" name="email" placeholder="Inglresa un Nombre" required="required" value="<?php echo $alum->email; ?>">
        </div>

        <div class="form-group">
            <input type="submit"  name="submit"  value="Agregar" class="btn btn-success btn-lg"  required="required" >
        </div>

        <div class="form-group">
            <a href="<?php echo base_url(); ?>index.php/CPProfesor/Aplasticas/a_Plasticas"> <input type="button"  name="submit"  value="Cancelar" class="btn btn-danger btn-lg"  required="required" > </a>
        </div>
    <?php } ?>
    </form>

</div>

