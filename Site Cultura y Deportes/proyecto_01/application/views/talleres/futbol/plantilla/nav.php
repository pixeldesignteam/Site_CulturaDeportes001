<body>

<!--.preloader-->
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url();?>images/slider/3.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Bienvenido <span alt=""<?php echo $nombre;?></span></h1>
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
                <a class="navbar-brand">
                    <h1><img class="img-responsive" src="<?php echo base_url();?>images/logo.png" alt="logo"></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#home">Home</a></li>
                    <li class="scroll"><a href="#services">Servicios</a></li>
                    <li class="scroll"><a href="<?php echo base_url();?>index.php/home/l_profesor">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div><!--/#main-nav-->
</header><!--/#home-->