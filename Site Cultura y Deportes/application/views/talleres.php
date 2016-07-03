<section class="testimonial" id="TALLERES">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="WORK_TITLE  fadeInUp animated">
                    <br>
                    <br>
                    <br>
                    <h2>TALLERES</h2>
                    <img src="<?php echo base_url();?>images/shape.png" alt="">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <table class="table table-bordered table-hover">

                        <tr class="success" ><td colspan="4" ><a class="btn btn-success"  href="nuevoAl">Nuevo</a></td></tr>
                        <tr class="danger">
                            <td>ID</td>
                            <td>Nombre </td>
                            <td>Descripcion</td>
                            <td colspan="2">Acciones</td>
                        </tr>
                      <?php
                      if(isset($users)){
                        foreach ($users as $u){
                            echo "<tr class='success'><td>" .$u->idTaller . "</td>" .
                                "<td>" . $u->NombreTaller. "</td>" .
                                "<td>" . $u->Descripcion. "</td>" .
                                "<td>";

                            echo "<td><a class='btn btn-warning btn-xs col-md-9 col-xs-6'  href='frmUpUsuario/$u->idUsuario'>Modificar</a></td>"
                                . "<td><a class='btn btn-danger btn-xs col-md-9 col-xs-6' href='delUsuario/$u->idUsuario' >Eliminar</a></td></tr>";
                        }
                      }else{
                        echo "Sin registros";
                      }
                      ?>
                      <tr class="success" ><td colspan="11" ><a class="btn btn-warning"  href="nuevoAl">Editar</a></td></tr><br>
                        <tr class="success" ><td colspan="11" ><a class="btn btn-danger"  href="nuevoAl">Eliminar</a></td></tr>
                      </table>
                        </div>
                      </div>
                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </section>
