<body>
<div class="container">
<div class="info">
  <h1>Cultura y Deporte</h1><span>Ser, Saber y Hacer</span>
</div>
</div>
<div class="form">
<div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
<form class="register-form">
  <input type="text" placeholder="name"/>
  <input type="password" placeholder="password"/>
  <input type="text" placeholder="email address"/>
</form>
<?php echo form_open('CPProfesor/Voleibol/login_data');?>
  <input type="text" placeholder="Matricula" name="matricula"/>
  <input type="password" placeholder="Contraseña" name="password"/>
  <button>Iniciar sesión</button>
    <a href="<?php echo base_url();?>index.php/Home/l_profesor">Regresar</a>
</form>
</div>
