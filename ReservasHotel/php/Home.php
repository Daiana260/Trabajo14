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

<!--Jumbotron--->

  <div class="jumbotron jumbotron-fluid"  style="background-image: url(../img/inicio1.jpg); background-size: 100% 100%; height: 400px;">
    <div class="container">
      <h1 class="display-4" style="margin-top: 200px; text-align: center;">Haz que cada viaje sea inolvidable</h1>
    </div>
  </div>

<!--Estadia-->

  <div class="container" style="margin-top: -30px; width: 80%; margin-left: 10%; background-color: #FBFCFC; padding: 50px">
    <h1 style="text-align: center; margin: 20px; margin-top: -40px">Descubrí Argentina</h1>
    <div class="row">
      <div class="col">
        <img src="../img/BA.jpg" id="img" alt="" width="400px" height="300px"> 
        <a class="btn btn-primary" style="width: 150px; margin-left: 25%; margin-top: 10px;" href="Reserva1.php" role="button">Buenos Aires</a>
      </div>
      <div class="col">
        <img src="../img/MR.jpg" id="img" alt="" width="400px" height="300px">
        <a class="btn btn-primary" style="width: 150px; margin-left: 25%; margin-top: 10px;" href="Reserva1.php" role="button">Mar de Plata</a>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <img src="../img/R.jpg" id="img" alt="" width="260p" height="300px">
        <a class="btn btn-primary" style="width: 150px; margin-left: 10%; margin-top: 10px;" href="Reserva1.php" role="button">Rosario</a>
      </div>
      <div class="col">
        <img src="../img/Cor.jpg" id="img" alt="" width="260p" height="300px">
        <a class="btn btn-primary" style="width: 150px; margin-left: 10%; margin-top: 10px;" href="Reserva1.php" role="button">Cordoba</a>
      </div>
      <div class="col">
        <img src="../img/ST.jpg" id="img" alt="" width="260px" height="300px">
        <a class="btn btn-primary" style="width: 150px; margin-left: 10%; margin-top: 10px;" href="Reserva1.php" role="button">Mendoza</a>
      </div>
    </div>
  </div>

<!--Atracciones-->
  <div class="content" style="width: 80%; margin-left: 10%; background-color: #FBFCFC; padding: 50px">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: -40px;">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#europa" role="tab" aria-controls="home" aria-selected="true">Europa</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#america" role="tab" aria-controls="profile" aria-selected="false">America</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#oriental" role="tab" aria-controls="contact" aria-selected="false">Oriental</a>
          </li>
          <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#argentina" role="tab" aria-controls="contact" aria-selected="false">Argentina</a>
          </li>
      </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="europa" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" style="width: 80%; margin-left: 10%; margin-top: 30px;">
                <div class="col-sm">
                    <img src="../img/londres.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Londres</a>
                </div>
                <div class="col-sm">
                    <img src="../img/hamburg.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Hamburgo</a>
                </div>
                <div class="col-sm">
                    <img src="../img/berlin.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Berlin</a>
                </div>
                <div class="col-sm">
                    <img src="../img/estambul.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Estambul</a>
                </div>
                <div class="col-sm">
                    <img src="../img/barcelona.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Barcelona</a>
                </div>
                <div class="col-sm">
                    <img src="../img/napoles.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Napoles</a>
                </div>
                
            </div>
        </div>
        <div class="tab-pane fade" id="america" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" style="width: 80%; margin-left: 10%; margin-top: 30px;">
                <div class="col-sm">
                    <img src="../img/new york.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">New York</a>
                </div>
                <div class="col-sm">
                    <img src="../img/diego.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">San Diego</a>
                </div>
                <div class="col-sm">
                    <img src="../img/vegas.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Las Vegas</a>
                </div>
                <div class="col-sm">
                    <img src="../img/miami.webp" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Miami</a>
                </div>
                <div class="col-sm">
                    <img src="../img/orlando.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Orlando</a>
                </div>
                <div class="col-sm">
                    <img src="../img/boston.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Boston</a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="oriental" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row" style="width: 80%; margin-left: 10%; margin-top: 30px;">
                <div class="col-sm">
                    <img src="../img/dubai.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Dubai</a>
                </div>
                <div class="col-sm">
                    <img src="../img/tel-aviv.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Tel Aviv</a>
                </div>
                <div class="col-sm">
                    <img src="../img/Mascate.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Mascate</a>
                </div>
                <div class="col-sm">
                    <img src="../img/abu-dhabi.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Abu Dhabi</a>
                </div>
                <div class="col-sm">
                    <img src="../img/jerusalem.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Jerusalem</a>
                </div>
                <div class="col-sm">
                    <img src="../img/Doha.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Doha</a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="argentina" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row" style="width: 80%; margin-left: 10%; margin-top: 30px;">
                <div class="col-sm">
                    <img src="../img/BA.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Buenos Aires</a>
                </div>
                <div class="col-sm">
                    <img src="../img/Cor.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Cordoba</a>
                </div>
                <div class="col-sm">
                    <img src="../img/MR.jpg" width="220px" height="150px" alt="">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Mar de Plata</a>
                </div>
                <div class="col-sm">
                    <img src="../img/R.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Rosario</a>
                </div>
                <div class="col-sm">
                    <img src="../img/ST.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 20px; margin-top: 5px;" href="Reserva1.php" role="button">Santiago del Estero</a>
                </div>
                <div class="col-sm">
                    <img src="../img/mendoza.jpg" width="220px" height="150px" alt="" style="margin-top: 20px;">
                    <a class="btn btn-primary" style="margin-left: 50px; margin-top: 5px;" href="Reserva1.php" role="button">Mendoza</a>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>