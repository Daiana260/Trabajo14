<?php 
    include("conexion.php");
    
    $id = $_REQUEST['id'];
    
    
    $query = "DELETE FROM reserva1 WHERE id='$id'";
    $envio = $conexion->query($query);
    
    header("Location:tabla.php");
 
    
?>