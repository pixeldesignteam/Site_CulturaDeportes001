    <!-- Sección contacto -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
              <br>
                    <br>
                    <br>
                <h2 class="section-heading">Contacto</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

  <?php echo form_open('Profe/login');?>
  <div class="row 50%">
    <div class="6u 12u(mobile)"><input type="text" id="username" name="matricula" placeholder="Numero" /></div>
    <div class="6u 12u(mobile)"><input type="text" id="password" name="nombreProfesor" placeholder="Nombre" /></div>
  </div>
  <div class="row">
    <div class="11u">
      <ul class="actions">
        <li><input type="submit" value="Iniciar" /></li>
      </ul>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
</section>
