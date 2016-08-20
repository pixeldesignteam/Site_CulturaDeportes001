<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preloader -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="<?php echo base_url();?>style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
</head>

<body>

  <div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
      <div class="col-md-12 text-center">
    <div class="form-title">
      <h4>Editar Alumno :</h4>
    </div>
    <div class="row">
      <tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Mojigangas/getAlumno">Regresar</a></td></tr>
    </div>
    <br>
<?php echo form_open_multipart('CA/Mojigangas/upAlumno');?>
<?php foreach($alumno as $alumno){ ?>

    <input type="hidden" name ="id" value="<?php echo $alumno->id_alumno; ?>">

    <div class="form-group">
      <input type="text" name="matricula" class="form-control" value="<?php echo $alumno->matricula; ?>" required>
    </div>

    <div class="form-group">
      <input type="text" name="nombre_alumno" class="form-control" value="<?php echo $alumno->nombre_alumno; ?>" required>
    </div>
    <div class="form-group">
      <input type="text" name="direccion" class="form-control" value="<?php echo $alumno->direccion; ?>" required>
    </div>
    <div class="form-group">
      <input type="text" name="telefono" class="form-control" value="<?php echo $alumno->telefono; ?>" required>
    </div>
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" value="<?php echo $alumno->email; ?>" required>
    </div>


    <label  for="carrera">Carrera</label>
    <center><div class="form-group input-group">
      <select required name="carrera">
      <option value=""><?php echo $alumno->carrera; ?></option>
      <option value="TI">TI</option>
      <option value="PI">PI</option>
      <option value="AD">AD</option>
      <option value="DN">DN</option>

      </select>
    </div></center>

    <label  for="carrera">Nivel</label>
    <center><div class="form-group input-group">
      <select required name="nivel">
      <option value=""><?php echo $alumno->nivel; ?></option>
      <option value="TSU">TSU</option>
      <option value="INGENIERÍA">INGENIERÍA</option>


      </select>
    </div></center>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <?php } ?>
    </form>
  </div>
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; 2016 UTL. All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank"></a></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- =========================
    SCRIPTS
    ============================== -->


    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url();?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>js/wow.js"></script>
    <script src="<?php echo base_url();?>js/script.js"></script>




    </body>

    </html>
