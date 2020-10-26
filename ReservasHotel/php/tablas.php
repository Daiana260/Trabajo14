<?php
  include("conexion.php");
?>
<!--Listo!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #ECF0F1">
<!-----Barra----->
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
<!--Tabla-->

  <table class="table table-striped" style="margin-top: 50px; width: 80%; margin-left: 1%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Lugar</th>
        <th scope="col">Pais</th>
        <th scope="col">Entrada</th>
        <th scope="col">Salida</th>
        <th scope="col">Adultos</th>
        <th scope="col">Niños</th>
        <th scope="col">Edad</th>
        <th scope="col">Habitacion</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Titulo Tarjeta</th>
        <th scope="col">Tipo Tarjeta</th>
        <th scope="col">Numero Tarjeta</th>
        <th scope="col">cvc</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $mostrar_todo_sql = "SELECT * FROM reserva1";
        $procesar_consulta = $conexion->query($mostrar_todo_sql);
        while($row = $procesar_consulta->fetch_assoc()){
      ?>
      <tr>
      <th><?php echo $row['id']; ?></th>
      <th><?php echo $row['lugar']; ?></th>
      <th><?php echo $row['pais']; ?></th>
      <th><?php echo $row['fechaE']; ?></th>
      <th><?php echo $row['fechaS']; ?></th>
      <th><?php echo $row['adultos']; ?></th>
      <th><?php echo $row['cantNiño']; ?></th>
      <th><?php echo $row['edad']; ?></th>
      <th><?php echo $row['habitacion']; ?></th>
      <th><?php echo $row['nombre']; ?></th>
      <th><?php echo $row['apellido']; ?></th>
      <th><?php echo $row['email']; ?></th>
      <th><?php echo $row['telefono']; ?></th>
      <th><?php echo $row['tituloTarjeta']; ?></th>
      <th><?php echo $row['tipoTarjeta']; ?></th>
      <th><?php echo $row['numTarjeta']; ?></th>
      <th><?php echo $row['cvc']; ?></th>
      </tr>
      <?php } ?>
    </tbody>
  </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>