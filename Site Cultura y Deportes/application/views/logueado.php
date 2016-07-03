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
                          <span class="sr-only">Toggle navigatio</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="#INICIO">Inicio</a></li>
                          <li><a href="#ALUMNOS">Alumnos</a></li>
                          <li><a href="#PROFESORES">Profesores</a></li>
                          <li><a href="#HORARIOS">Horarios</a></li>
                          <li><a href="#TALLERES">Talleres</a></li>
                          <li><a href=" ">Cerrar sesión</a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
          </nav>


                  <div class="container">
                      <div class="row">
                          <div class="col-md-12 text-center">
                              <div class="home_text wow fadeInUp animated">
                                  <h2>Bienvenido </h2>
                                  <h2><?php echo $profesor; ?> </h2>
                                  <br>
                                  <a href="cerrarSecion" class="btn btn-danger ">Cerrar secion</a>
                                  <img src="<?php echo base_url();?>images/shape.png" alt="">
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="container">
                      <div class="row">
                          <div class="col-md-12 text-center">
                              <div class="scroll_down">
                                  <a href="#ALUMNOS"><img src="<?php echo base_url();?>images/scroll.png" alt=""></a>
                                  <h4>Scroll Down</h4>
                                  <div class="container-fluid">
          	                </div>
                          </div>
                      </div>
                  </div>
              </div>
              </section>
          </header>


          <section class="about_us_area" id="ALUMNOS">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="WORK_TITLE wow fadeInUp animated">
                              <h2>ALUMNOS</h2>
                              <img src="<?php echo base_url();?>images/shape.png" alt="">
                              <div class="container-fluid">
          	<div class="row">
          		<div class="col-md-12">
          			<table class="table">
          				<thead>
          					<tr>
          						<th>
          							#
          						</th>
          						<th>
          							Product
          						</th>
          						<th>
          							Payment Taken
          						</th>
          						<th>
          							Status
          						</th>
          					</tr>
          				</thead>
          				<tbody>
          					<tr>
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Default
          						</td>
          					</tr>
          					<tr class="active">
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Approved
          						</td>
          					</tr>
          					<tr class="success">
          						<td>
          							2
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							02/04/2012
          						</td>
          						<td>
          							Declined
          						</td>
          					</tr>
          					<tr class="warning">
          						<td>
          							3
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							03/04/2012
          						</td>
          						<td>
          							Pending
          						</td>
          					</tr>
          					<tr class="danger">
          						<td>
          							4
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							04/04/2012
          						</td>
          						<td>
          							Call in to confirm
          						</td>
          					</tr>
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <section class="testimonial" id="PROFESORES">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="WORK_TITLE wow fadeInUp animated">
                              <h2>PROFESORES</h2>
                              <img src="<?php echo base_url();?>images/shape.png" alt="">
                              <div class="container-fluid">
          	<div class="row">
          		<div class="col-md-12">
          			<table class="table">
          				<thead>
          					<tr>
          						<th>
          							#
          						</th>
          						<th>
          							Product
          						</th>
          						<th>
          							Payment Taken
          						</th>
          						<th>
          							Status
          						</th>
          					</tr>
          				</thead>
          				<tbody>
          					<tr>
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Default
          						</td>
          					</tr>
          					<tr class="active">
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Approved
          						</td>
          					</tr>
          					<tr class="success">
          						<td>
          							2
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							02/04/2012
          						</td>
          						<td>
          							Declined
          						</td>
          					</tr>
          					<tr class="warning">
          						<td>
          							3
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							03/04/2012
          						</td>
          						<td>
          							Pending
          						</td>
          					</tr>
          					<tr class="danger">
          						<td>
          							4
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							04/04/2012
          						</td>
          						<td>
          							Call in to confirm
          						</td>
          					</tr>
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <section class="testimonial"  id="HORARIOS">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="WORK_TITLE wow fadeInUp animated">
                              <h2>HORARIOS</h2>
                              <img src="<?php echo base_url();?>images/shape.png" alt="">
                              <div class="container-fluid">
          	<div class="row">
          		<div class="col-md-12">
          			<table class="table">
          				<thead>
          					<tr>
          						<th>
          							#
          						</th>
          						<th>
          							Product
          						</th>
          						<th>
          							Payment Taken
          						</th>
          						<th>
          							Status
          						</th>
          					</tr>
          				</thead>
          				<tbody>
          					<tr>
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Default
          						</td>
          					</tr>
          					<tr class="active">
          						<td>
          							1
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							01/04/2012
          						</td>
          						<td>
          							Approved
          						</td>
          					</tr>
          					<tr class="success">
          						<td>
          							2
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							02/04/2012
          						</td>
          						<td>
          							Declined
          						</td>
          					</tr>
          					<tr class="warning">
          						<td>
          							3
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							03/04/2012
          						</td>
          						<td>
          							Pending
          						</td>
          					</tr>
          					<tr class="danger">
          						<td>
          							4
          						</td>
          						<td>
          							TB - Monthly
          						</td>
          						<td>
          							04/04/2012
          						</td>
          						<td>
          							Call in to confirm
          						</td>
          					</tr>
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <section class="testimonial" id="TALLERES">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="WORK_TITLE  fadeInUp animated">
                              <h2>TALLERES</h2>
                              <img src="<?php echo base_url();?>images/shape.png" alt="">
                              <div class="container-fluid">

          		<div class="col-md-12">
          			<table class="table">
          				<thead>
          					<tr>
          						<th>
          							Nombre
          						</th>
          						<th>
          							Descripción
          						</th>
          					</tr>
          				</thead>
          				<tbody>
          					<tr>
          						<td>
          							Guitarra
          						</td>
          						<td>
          							Tocar la Guitarra
          						</td>
          					</tr>
          					<tr class="active">
          						<td>
          							Canto
          						</td>
          						<td>
          							Se canta
          						</td>
          					</tr>
          				</tbody>
          			</table>
          		</div>

          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <footer>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="copyright_text   wow fadeInUp animated">
                              <p>&copy; Pixel Desing 2016. Derechos Reservados <a href="https://www.facebook.com/javier.bautistajuarez.9"target="_blank">Facebook</a></p>
                              <p>UTL</p>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
