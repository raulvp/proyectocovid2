<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto COVID</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/misestilos.css">

  <script>
    function ingresarSistema(){
      $(document).ready(function(){
        var usuario = $('#usu').val();
        var passw = $('#passw').val();

        $.post("verificardatos.php",{usu:usuario,passw:passw},function(result){
          $("#respuesta").html(result);
          $("#respuesta").show();
        });
      });
    }
  </script>
  <style>
    #sinresultado{
      background-color:yellow;
    }
  </style>
</head>
<body class="hold-transition login-page colorfondologuin">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Proyecto</b>COVID</a>
  </div>
  <div id="respuesta" style="backgroundcolor:yellow; display:none">

  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia tu sesion</p>

      
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="usu" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id='passw' placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          <!-- /.col -->
          <div class="col-4">
            <button class="btn btn-primary btn-block" onclick="ingresarSistema()">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      

      
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
