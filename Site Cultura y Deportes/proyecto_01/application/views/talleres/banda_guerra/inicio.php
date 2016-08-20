<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Tablas</h2>
                </div>
                <table class="table  table-responsive table-striped table-hover table-bordered" >
                    <tr>
                        <td colspan="1" ><a href="<?php echo base_url(); ?>index.php/CPProfesor/Bguerra/frmAlumno" class="btn btn-info">Agregar</a></td>
                        <td colspan="1" ><a href="<?php echo base_url(); ?>index.php/CPProfesor/Bguerra/tuXML" class="btn btn-success">Descargar XML</a></td>
                        <td colspan="1" ><a href="<?php echo base_url(); ?>index.php/CPProfesor/Bguerra/tuExel" class="btn btn-success">Descargar Exel</a></td>
                    </tr>

                    <tr>
                        <td>Matricula:</td>
                        <td class="hidden-xs">Foto:</td>
                        <td class="hidden-xs">Nombre:</td>
                        <td class="hidden-xs">Dirección:</td>
                        <td class="hidden-xs">Teléfono:</td>
                        <td class="hidden-xs">Email:</td>
                        <td class="hidden-xs">Carrera:</td>
                        <td class="hidden-xs">Nivel:</td>

                        <td colspan="2" style=" text-align: center">Acciones</td>
                    </tr>
                    <?php
                    if(isset($alum)){
                        foreach ($alum as $al){
                            echo "<tr> <td>" . $al->matricula . "</td>" .


                                "<td class='hidden-xs'>" . $al->nombre_alumno. "</td>" .
                                "<td class='hidden-xs'>" . $al->direccion. "</td>" .
                                "<td class='hidden-xs'>" . $al->telefono. "</td>" .
                                "<td class='hidden-xs'>" . $al->email. "</td>" .
                                "<td class='hidden-xs'>" . $al->carrera. "</td>" .
                                "<td class='hidden-xs'>" . $al->nivel. "</td>" .
                                "<td>";?><img src="<?php echo base_url().'upload/'.$al->foto?>" width="150" height="150"></td>
                            <?php
                            echo "<td><a class='btn btn-success center-block'  href='frmUpAlumno/$al->id_alumno'>Modificar</a></td>" .
                                "<td><a class='btn btn-danger center-block' href='delAlumno/$al->id_alumno '>Eliminar</a></td></tr>";
                        }
                    }else{
                        echo "No se encontraron registros";
                    }
                    ?>
                </table>
            </div>

</section>


</div>
</div>

</div>
</section>