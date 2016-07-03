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

              <div class="container">

<tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Alumnos/getAlumno">Regresar</a></td></tr>
<br>
<br>

<?php echo form_open('CA/Alumnos/upAlumno');?>
<?php foreach($alumno as $alumno){ ?>

  <input type="hidden" name ="id" value="<?php echo $alumno->idAlumno; ?>">

  <div class="input-group">
    <span class="input-group-addon glyphicon glyphicon-user"></span>
    <input type="text" class="form-control" id="matricula" name="matricula" value = "<?php echo $alumno->matricula; ?>">
  </div>

  <div class="input-group">
    <span class="input-group-addon glyphicon glyphicon-lock"></span>
  <input type="text" class="form-control" id="foto" name="foto"  value = "<?php echo $alumno->foto; ?>">
    </div>

    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-lock"></span>
    <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno"  value = "<?php echo $alumno->nombreAlumno; ?>">
      </div>

      <div class="input-group">
        <span class="input-group-addon glyphicon glyphicon-lock"></span>
      <input type="text" class="form-control" id="direccion" name="direccion"  value = "<?php echo $alumno->direccion; ?>">
        </div>

        <div class="input-group">
          <span class="input-group-addon glyphicon glyphicon-lock"></span>
        <input type="text" class="form-control" id="telefono" name="telefono"  value = "<?php echo $alumno->telefono; ?>">
          </div>

          <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
          <input type="text" class="form-control" id="alergias" name="alergias"  value = "<?php echo $alumno->alergias; ?>">
            </div>

            <div class="input-group">
              <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input type="text" class="form-control" id="enfermedades" name="enfermedades"  value = "<?php echo $alumno->enfermedades; ?>">
              </div>

              <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-lock"></span>
              <input type="text" class="form-control" id="altura" name="altura"  value = "<?php echo $alumno->altura; ?>">
                </div>

                <div class="input-group">
                  <span class="input-group-addon glyphicon glyphicon-lock"></span>
                <input type="text" class="form-control" id="peso" name="peso"  value = "<?php echo $alumno->peso; ?>">
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                  <input type="text" class="form-control" id="sangre" name="sangre"  value = "<?php echo $alumno->sangre; ?>">
                    </div>
    <button type="submit" class="btn btn-info">

        <span class="glyphicon glyphicon-apple"></span>
          Enviar
    </button>
    <script language="JavaScript" type="text/javascript">
          <!--
          function checkAGE()
          {
          if (!confirm
          ("Decea actualizar "))
          history.go(-1);return " "}
          document.writeln(checkAGE())
          // -->
          </script>

    <?php } ?>
    </form>
    <footer>
    <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
          <div class="copyright_text   wow fadeInUp animated">
              <p>&copy; brandy 2015.All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team</a></p>
              <p>Made with love for creative people.</p>
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
