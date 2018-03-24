<?php
error_reporting(error_reporting() & ~E_NOTICE);
$codigo=($_GET['borrar']);
  
include ("../conexion/conectar.php");


$connection->query("DELETE FROM ingredientes WHERE codigo='$codigo'");

header("location:../navegacion/entrada.php");

?>


