<section id="about-usa" class="parallax">
  <div class="container">
    <div class="row">
      <div class="widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Login:</h4>
        </div>
        <div class="form-body">
          <?php echo form_open('Home/login');?>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" id="inputEmail" name="matricula" placeholder="Ingresa tu Matricula" data-error="Matricula no valida" required>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group">
              <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="password" placeholder="Password no valido" required>
            </div>

            <input type="submit" class="btn btn-primary " value="Iniciar sesión">

          </form>
        </div>
      </div>
  </div>
  </div>
</section>
