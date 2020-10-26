<?php
    include("conexion.php");

    $nomCompleto = $_POST['nomCompleto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];

    $query = "INSERT INTO perfil (nomCompleto, email, telefono, sexo) VALUES('$nomCompleto', '$email', '$telefono','$sexo')";
    $envio = $conexion->query($query);

    echo $nomCompleto;
    echo $email;
    header("Location: verPerfil.php")
?>
