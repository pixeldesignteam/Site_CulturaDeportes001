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

<div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
    <div class="col-md-12 text-center">
  <div class="form-title">
    <h4>Nuevo historial medico :</h4>
  </div>
  <div class="row">
  <tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Historiales/getHistorial">Regresar</a></td></tr>
</div>
<br>
<?php echo form_open('CA/Historiales/addHistorial');?>
<div class="form-group">
  <input type="text" name="alergias" class="form-control" id="inputName" placeholder="Alergias" required>
</div>
<div class="form-group">
  <input type="text" name="enfermedades" class="form-control" id="inputName" placeholder="Enfermedades cronicas" required>
</div>
<div class="form-group">
  <input type="text" name="altura" class="form-control" id="inputName" placeholder="Altura" required>
</div>
<div class="form-group">
  <input type="text" name="peso" class="form-control" id="inputName" placeholder="Peso" required>
</div>
<div class="form-group">
  <input type="text" name="sangre" class="form-control" id="inputName" placeholder="Sangre" required>
</div>
<div class="form-group">
  <input type="text" name="idAlumno" class="form-control" id="inputName" placeholder="Alumno" required>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>
</div>
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