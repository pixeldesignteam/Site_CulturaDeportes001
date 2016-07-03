<section class="about_us_area" id="ALUMNOS">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="WORK_TITLE wow fadeInUp animated">
                    <br>
                    <br>
                    <br>
                    <h2>ALUMNOS</h2>
                    <img src="<?php echo base_url();?>images/shape.png" alt="">
                    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <table class="table table-bordered table-hover">

    <tr class="success" ><td colspan="11" ><a class="btn btn-success"  href="nuevoAl">Nuevo</a></td></tr>
    <tr class="danger">
        <td>Matricula</td>
        <td>Foto</td>
        <td>Nombre</td>
        <td>Direccion</td>
        <td>Telefono</td>
        <td>Alergias</td>
        <td>Enfermedades</td>
        <td>Altura</td>
        <td>Peso</td>
        <td>Tipo de sangre</td>

    </tr>
<?php
if(isset($users)){
    foreach ($users as $u){
        echo "<tr class='success'><td>" .$u->Matricula . "</td>" .
            "<td>" . $u->Foto. "</td>" .
            "<td>" . $u->NombreAlumno. "</td>" .
            "<td>" . $u->Direccion. "</td>" .
            "<td>" . $u->Telefono. "</td>" .
            "<td>" . $u->Alergias. "</td>" .
            "<td>" . $u->EnfermedadesCronicas. "</td>" .
            "<td>" . $u->Altura. "</td>" .
            "<td>" . $u->Peso. "</td>" .
            "<td>" . $u->TipoSangre . "</td>" .
            "<td>";


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
