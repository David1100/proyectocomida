<?php
error_reporting(error_reporting() & ~E_NOTICE);
include ("../conexion/conectar.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$barrio = $_POST["barrio"];
$municipio = $_POST["municipio"];
$email = $_POST["email"];    
$telefono= $_POST["telefono"];
$telefono2= $_POST["telefono2"];
$contrasena = $_POST["contrasena"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
    
try {
  
    
    $connection ->query("INSERT INTO registropersonal2(nombre, apellido, direccion, barrio, municipio, email, telefono, telefono2, contrasena, dia, mes) VALUES('$nombre', '$apellido', '$direccion', '$barrio', '$municipio', '$email', '$telefono','$telefono2', '$contrasena', '$dia', '$mes')");

    
    echo "<script>alert('Ingresado');window.location.href='../index.php';</script>";
    }
catch(PDOException $e)
    {
    echo $insertar . "<br>" . $e->getMessage();
    }

$conn = null;
//}
?>