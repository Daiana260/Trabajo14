<!--Listo!-->
<?php
  include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(238, 243, 248)">
<form style="width: 40%;  padding: 20px; background-color: rgb(231, 231, 231); margin-left: 30%" method="post" action="Registro.php">
    <h1 style="text-align: center; font-size: 25px;">Registrarse</h1>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
      <label>Correo Electronico</label>
      <input type="email" class="form-control" placeholder="Example: name@gmail.com" name="correo">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="pwd">
      <small class="form-text text-muted"> <a href="#">¿Olvdaste la Contraseña?</a></small>
    </div>

    <button type="submit" style="margin-left: 40%;" class="btn btn-primary">Registrarse</button>
    
    <hr>
    <div class="opcion">
        <div style="border: 2px rgb(31, 127, 218) solid; height: 40px; background-color: rgb(31, 127, 218);" class="media">
            <img src="../img/g.png" width="40px" height="36px" class="mr-2" alt="...">
            <div class="media-body">
              <h5 class="mt-2" style="color: white; height: 20px" >Iniciar Sesion con Google</h5>
            </div>
        </div>
        <br>
        <div style="border: 2px rgb(54, 54, 243) solid; background-color: rgb(54, 54, 243);" class="media">
            <img src="../img/f.jpg" width="40px" height="40px" class="mr-2" alt="...">
            <div class="media-body">
              <h5 class="mt-2" style="color: white; height: 20px" >Iniciar Sesion con Facebook</h5>
            </div>
        </div>
    </div>
    <br>    
    <p>¿Ya tienes una Cuenta? <a href="Sesion.php">Iniciar Sesion</a></p>
    <small class="form-text text-muted" style="text-align: center;">Al registrarte aceptas nuestros <a href="#">Términos de servicio</a> y te suscribes a los mensajes de Reservas Hotel. Procesaremos tu información personal según nuestra <a href="#">Política de privacidad</a>.</small>
  </form>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>