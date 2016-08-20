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
  <header id="INICIO" style="background-position: 50% -125px;">
      <div class="section_overlay">
          <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                  </div>
        <div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
        <div class="col-md-12 text-center">
        <div class="form-title">
        <h4>Editar Profesor:</h4>
        </div>
        <div class="row">
<tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Talleres/getTaller">Regresar</a></td></tr>
</div>
<br>
<?php echo form_open('CA/Talleres/upTeller');?>
<?php foreach($taller as $taller){ ?>

  <input type="hidden" name ="id" value="<?php echo $taller->idTaller; ?>">

  <div class="form-group">
    <input type="text" name="nombreTaller"  class="form-control" value = "<?php echo $taller->nombreTaller; ?>" required>
  </div>
  <div class="form-group">
    <input type="text" name="direccion"  class="form-control" value = "<?php echo $taller->descripcion; ?>" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>

<?php } ?>
</form>
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
