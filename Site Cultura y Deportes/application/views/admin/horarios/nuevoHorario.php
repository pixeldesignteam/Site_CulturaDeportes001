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

              <div class="container">
                <tr class="success" ><td colspan="2" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Horarios/getHora">Regresar</a></td></tr>


<?php echo form_open('CA/Horarios/addHora');?>


    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-user"></span>
      <input type="text" name="hora" class="form-control" id="matricula" placeholder="Horario">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-user"></span>
      <input type="text" name="dia" class="form-control" id="matricula" placeholder="Dia">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-user"></span>
      <input type="text" name="lugar" class="form-control" id="matricula" placeholder="Aula">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-user"></span>
      <input type="text" name="cuatrimestre" class="form-control" id="matricula" placeholder="Cuatrimestre">
    </div>
    <br>
    <input type="submit" value="enviar">

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
