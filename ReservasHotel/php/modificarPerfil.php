<?php 
    include("conexion.php");
    
    $nomCompleto = $_POST['nomCompleto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    
    $query = "UPDATE perfil SET nomCompleto='$nomCompleto',email='$email',telefono='$telefono',sexo='$sexo' WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location:verPerfil.php");
    
?>