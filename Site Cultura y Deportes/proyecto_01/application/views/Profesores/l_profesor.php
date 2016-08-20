<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Profesores|administrador</title>
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url();?>css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo base_url();?>images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenido <span><?php echo $nombre;?></span></h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Comenzar</a>
          </div>
        </div>
      </div>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="<?php echo base_url();?>images/logo.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <?php
                if(isset($privilegios)){
                  if($privilegios == 1){
            ?>
            <li><a href="<?php echo base_url();?>index.php/CA/Home/index">CPanel</a></li>
            <?php
                }
              }
            ?>

           <li class="scroll"><a href="<?php echo base_url();?>index.php/CPProfesor/Aplasticas/endSession">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Talleres</h2>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
          </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Aplasticas/login_Taller">Artes Plasticas</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Baloncesto/login_Taller">Baloncesto</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Bguerra/login_Taller">Banda de guerra</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Bsalon/login_Taller">Baile de salón</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Coro/login_Taller">Coro</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Dfolklorica/login_Taller">Danza folklórica</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Escolta/login_Taller">Escolta</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Futbol/login_Taller">Futbol</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Guitarra/login_Taller">Guitarra</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Mojigangas/login_Taller">Mojigangas</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Teatro/login_Taller">Teatro</a></h3>

            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info">
              <h3><a href="<?php echo base_url();?>index.php/CPProfesor/Voleibol/login_Taller">Voleibol</a></h3>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="<?php echo base_url();?>images/logo.png" alt=""></a>
        </div>

      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 UTL.</p>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>

  </body>
  </html>
