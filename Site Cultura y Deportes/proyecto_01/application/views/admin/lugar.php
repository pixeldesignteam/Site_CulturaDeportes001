<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPANEL</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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



    <!-- Style -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/lte-ie7.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url();?>index.php/CA/Home/">Inicio</a></li>
                        <li><a href="<?php echo base_url();?>index.php/CA/Profesores/getProfe">Profesores</a></li>
                        <li><a href="<?php echo base_url();?>index.php/CA/Horarios/getHora">Horarios</a></li>
                        <li class="dropdown pull-right">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Talleres<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Talleres/getTaller">Talleres</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Plasticas/getArte">Artes Plasticas</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Baloncesto/getBalon">Baloncesto</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Banda/getBanda">Banda de guerra</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Baile/getBaile">Baile de salón</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Coro/getCoro">Coro</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Danza/getAlumno">Danza folklórica</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Escolta/getAlumno">Escolta</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Futbol/getAlumno">Futbol</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Guitarra/getAlumno">Guitarra</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Mojigangas/getAlumno">Mojigangas</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Teatro/getAlumno">Teatro</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>index.php/CA/Voleibol/getAlumno">Voleibol</a>
                              </li>

                            </ul>
                          </li>


                        <li><a href="<?php echo base_url();?>index.php/CA/Beca/getBeca">Beca</a></li>
                        <li><a href="<?php echo base_url();?>index.php/CA/Historiales/getHistorial">Historial medico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/CA/Lugares/getLugar">Lugares</a></li>
                          <li><a  href="cerrarSecion">Cerrar sesión</a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
          </nav>


<section class="testimonial" id="TALLERES">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="WORK_TITLE  fadeInUp animated">
                    <h2>Lugares</h2>
                    <img src="<?php echo base_url();?>images/shape.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<table class="table table-bordered table-hover">

    <tr class="success" ><td colspan="9" ><a class="btn btn-success"  href="nuevoLugar">Nuevo</a></td></tr>

                        <tr class="success" ><td colspan="9" ><a class="btn btn-success"  href="<?php echo base_url();?>index.php/CA/Lugares/tuXML/Lista">XML</a></td></tr><tr class="danger">
        <td>Nombre</td>
        <td>Direccion</td>
        <td>Taller</td>

        <td colspan="2">Acciones</td>
    </tr>
<?php
if(isset($lugar)){
    foreach ($lugar as $lugar){
        echo "<tr class='success'><td>" .$lugar->nombreLugar . "</td>" .
            "<td>" . $lugar->direccion. "</td>" .
            "<td>" . $lugar->idTaller. "</td>" .

            "<td>";
            echo "<td><a class='btn btn-warning btn-xs col-md-9 col-xs-6'  href='actualizarLugar/$lugar->idLugar'>Modificar</a></td>"
                      . "<td><a class='btn btn-danger btn-xs col-md-9 col-xs-6' href='delLugar/$lugar->idLugar' >Eliminar</a></td></tr>";
    }
}else{
    echo "Sin registros";
}
?>

</table>

            </div>
        </div>
    </div>
</section>
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
