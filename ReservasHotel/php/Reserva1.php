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
<body style="background-color: #F7F9F9">
<!-----Nav----->  
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="Home.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="tabla.php">Tus Reservas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Sesion.php">Inicio de Sesion</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Datos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Perfil.php">Perfil</a>
          <a class="dropdown-item" href="verPerfil.php">Ver tu Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Sesion.php">Cerrar Sesion</a>
        </div>
      </ul>
    </div>
  </nav>

<!---Formulario--->
    <form style="width: 60%; margin-left: 20%; margin-top: 25px; padding: 20px; background-color: #FDFEFE; border-radius: 1%;" action="reservar.php" method="POST">
        
    <div class="form-row">
            <div class="form-group col-md-6">
              <label>Lugar</label>
              <input type="text" class="form-control" placeholder="¿A donde vas?" name="lugar">
            </div>
            <div class="form-group col-md-6">
              <label>Pais</label>
              <input type="text" class="form-control" placeholder="¿Pais?" name="pais">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Fecha de Entreda</label>
            <input type="datetime-local" class="form-control" name="fechaE">
          </div>
          <div class="form-group col-md-6">
            <label>Fecha de Salida</label>
            <input type="datetime-local" class="form-control" name="fechaS">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Adultos:</label>
            <input type="number" class="form-control" name="adultos">
          </div>
          <div class="form-group col-md-4">
            <p>Cantidad de Niños:</p>
            <select class="form-control" name="cantNiño">
              <option value="---" >---</option>
              <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
              <option value="4" >4</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <p>Edad:</p>
            <select class="form-control" name="edad">
            <option value="---" >---</option>
              <option value="0" >0</option>
              <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
              <option value="4" >4</option>
              <option value="5" >5</option>
              <option value="6" >6</option>
              <option value="7" >7</option>
              <option value="8" >8</option>
              <option value="9" >9</option>
              <option value="10" >10</option>
              <option value="11" >11</option>
              <option value="12" >12</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label>Habitacion</label>
            <input type="number" class="form-control" name="habitacion">
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group col-md-6">
              <label>Apellido</label>
              <input type="text" class="form-control" name="apellido">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group col-md-6">
            <label>Telrfono(Celular, si es posible)</label>
            <input type="number" class="form-control" name="telefono">
          </div>
        </div>
        <div class="form-group">
          <h6>¿Como Quiere Pagar?</h6>
          <label>Titulo de la Tarjeta</label>
          <input type="text" class="form-control" placeholder="Nombre" name="tituloTarjeta">
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <p>Tipo de Tarjeta</p>
                <select class="form-control" name="tipoTarjeta">
                  <option selected>Elija...</option>
                  <option value="Tarjeta de Credito" >Tarjeta de Credito</option>
                  <option value="Tarjeta Visa" >Tarjeta Visa</option>
                  <option value="JCB" >JCB</option>
                  <option value="American Express" >American Express</option>
                  <option value="Efectivo">Efectivo</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Numero de Tarjeta</label>
                <input type="number" class="form-control" name="numTarjeta">
            </div>
            <div class="form-group col-md-2">
                <label>Codigo CVC</label>
                <input type="number" class="form-control" name="cvc">
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>