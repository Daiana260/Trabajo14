<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<!---Nav---->
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

<!----Perfil----->

    <div class="box" style="padding: 20px; width: 500px; margin: auto; margin-top: 20px; background-color: rgb(207, 207, 209);">
        <h4>Perfil:</h4>
        <hr>
        <form method="POST" action="savePerfil.php">
            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" name="nomCompleto">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
                <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Numero de Telefono</label>
                <input type="number" class="form-control" name="telefono">
            </div>
            <div class="form-group">
                <p>Genero:</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="Femenino">
                    <label class="form-check-label" for="inlineRadio1">Femenino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino">
                    <label class="form-check-label" for="inlineRadio2">Masculino</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>