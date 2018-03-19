<?php
error_reporting(error_reporting() & ~E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "comidas";

//if(isset($_POST['insertar'])){
//include '../conexion/conexion.php'; 
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
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insertar = "INSERT INTO registropersonal2(nombre, apellido, direccion, barrio, municipio, email, telefono, telefono2, contrasena, dia, mes) VALUES('$nombre', '$apellido', '$direccion', '$barrio', '$municipio', '$email', '$telefono','$telefono2', '$contrasena', '$dia', '$mes')";

    // use exec() because no results are returned
    $conn->exec($insertar);
    echo "Insertado Exitosamente";
    }
catch(PDOException $e)
    {
    echo $insertar . "<br>" . $e->getMessage();
    }

$conn = null;
//}
?>