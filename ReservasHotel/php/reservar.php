<?php
    include("conexion.php");

    $lugar = $_POST['lugar'];
    $pais = $_POST['pais'];
    $fechaE = $_POST['fechaE'];
    $fechaS = $_POST['fechaS'];
    $adultos = $_POST['adultos'];
    $cantNiño = $_POST['cantNiño'];
    $edad = $_POST['edad'];
    $habitacion = $_POST['habitacion'];
    $nombre = $_POST['nombre'];
    $apelllido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $tituloTarjeta = $_POST['tituloTarjeta'];
    $tipo = $_POST['tipoTarjeta'];
    $numTarjeta = $_POST['numTarjeta'];
    $cvc = $_POST['cvc'];

    $query = "INSERT INTO reserva1 (lugar, pais, fechaE, fechaS, adultos, cantNiño, edad, habitacion, nombre, apellido, email, telefono, tituloTarjeta, tipoTarjeta, numTarjeta, cvc) 
    VALUES('$lugar', '$pais', '$fechaE','$fechaS','$adultos','$cantNiño','$edad','$habitacion','$nombre','$apelllido','$email','$telefono','$tituloTarjeta','$tipo','$numTarjeta','$cvc')";
    $envio = $conexion->query($query);
    header("Location:tabla.php");
?>
