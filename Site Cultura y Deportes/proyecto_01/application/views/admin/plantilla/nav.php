
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
