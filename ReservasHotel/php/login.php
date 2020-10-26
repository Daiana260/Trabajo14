<?php

    include("conexion.php");
    $correo = $_POST['correo'];
    $pwd = $_POST['pwd'];

    $validacion;

    $query = mysqli_query($conexion,"SELECT * FROM registrarse WHERE correo = '".$correo."' AND pwd = '".$pwd."'");
    
    $resultado = mysqli_num_rows($query);
    
    if($resultado == 1){
        $validacion =  $correo;
        echo $correo;
        echo $pwd;
    }else{
        $validacion = "Nombre de usuario y/o contraseña incorrectos";
        header("Location: error.php");
    }

?>