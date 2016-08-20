<body>
<div class="container">
<div class="info">
  <h1>Cultura y Deporte</h1><span>Ser, Saber y Hacer</span>
</div>
</div>
<div class="form">
<div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <div class="error">
    <?php echo validation_errors(); ?>
  </div>
<?php echo form_open('CPProfesor/Aplasticas/login_data');?>
  <input type="text" placeholder="Matricula" name="matricula" value="<?php echo set_value('matricula'); ?>" size="8"/>
  <input type="password" placeholder="Contraseña" name="password" value="<?php echo set_value('password'); ?>" size="15"/>
  <button>Iniciar sesión</button>
    <a href="<?php echo base_url();?>index.php/Home/l_profesor">Regresar</a>
</form>
</div>
