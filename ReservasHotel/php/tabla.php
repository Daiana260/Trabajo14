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
<!--Tablas-->
    <div class="container">
        <div class="row">
            <div class="row table-responsive" style="width:80%;margin-left:10%;margin-top:5%;">
                <?php 
                    $query = "SELECT * FROM reserva1";
                    $envio = $conexion->query($query);
                    while($row=$envio->fetch_assoc()){
                ?>

                <div class="shadow-lg p-3 mb-5 bg-white rounded" style="width:40%; float:left; margin-left:5%;">
                <div class="card-header">Reserva Nº<?php echo $row['id']; ?></div>
                    <div class="card-body">
                        <h5 class="card-title">Nombre: <?php echo $row['nombre']; ?></h5>
                        <h5 class="card-title">Apellido: <?php echo $row['apellido']; ?></h5>
                        <p>Destino: <?php echo $row['lugar']; ?></p>
                        <p>Pais: <?php echo $row['pais']; ?></p>
                        <p>Fecha de Entrada: <?php echo $row['fechaE']; ?></p>
                        <p>Fecha de Salida: <?php echo $row['fechaS']; ?></p>
                        <p>Adultos: <?php echo $row['adultos']; ?></p>
                        <p>Niños: <?php echo $row['cantNiño']; ?></p>
                        <p>Edad: <?php echo $row['edad']; ?></p>
                        <p>Habitaciones: <?php echo $row['habitacion']; ?></p>
                        <p>Email: <?php echo $row['email']; ?></p>
                        <p>Telefono: <?php echo $row['telefono']; ?></p>
                        <h5 class="card-title">Titulo Tarjeta: <?php echo $row['tituloTarjeta']; ?></h5>
                        <p>Tipo Tareta: <?php echo $row['tipoTarjeta']; ?></p>
                        <p>Numero Tarjeta: <?php echo $row['numTarjeta']; ?></p>
                        <p>CVC: <?php echo $row['cvc']; ?></p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                        Cancelar Reserva
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anular Reserva!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Estas Segurod de Cancelar la Reserva?
                            </div>
                            <div class="modal-footer">
                            <a href="tabla.php" class="btn btn-outline-success">No</a>
                            <a href="eliminar_reserva.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Si</a>
                            </div>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>