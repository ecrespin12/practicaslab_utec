<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión</title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">

  <script src="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.js"></script>
 
</head>

<body>
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-row">
        <div class="login-form ">
      
          <?php if ($this->session->flashdata("error")) : ?>   
                  <script type="text/javascript">
                      swal({
                          html: true,
                          title: "Error de Ingreso",
                          text: "<h5 class='alertMsj'>El usuario y/o contraseña es incorrecto, verifique sus datos e intente nuevamente o póngase en contacto con el administrador.</h5>",
                          type: "error",
                          confirmButtonText: "Aceptar"
                              });
                  </script>
            <?php endif; ?>
      
          <form action="<?php echo base_url(); ?>auth/login" method="post"  class="form_SRC" data-type-form="login" autocomplete="off">
      
            <h2 class="text-center">Iniciar Sesion</h2>
            <div class="or-seperator"><i></i></div>
      
          <div class="form-row">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="Usuario" required="">
                </div>
              </div>
          </div>
      
          <div class="form-row">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                </div>
              </div>
          </div>
      
          <div class="form-row">
              <div class="form-group">
                <button type="submit" class="btn btn-primary login-btn btn-block">Ingresar</button>
              </div>
              <div class="clearfix">
                <a href="#" class="pull-right">¿Olvido la contraseña?</a>
              </div>
          </div>
      
          </form>
         
          <p class="text-center text-muted small"> Todos los derechos reservados | Desarrollado por: <a href="http://www.deprosistemas.com">deprosistemas</a></p>
        </div>
    </div>
 </div>
</div>


  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>

</html>

<!-- TODO: El form de login es de hacerlo responsive, esto es a nivel front-end  -->

