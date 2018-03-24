<?php
error_reporting(error_reporting() & ~E_NOTICE);


if (isset($_POST['insertar'])){
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comidas";


    

$cantidad = $_POST['cantidad'];
$producto = $_POST['producto'];
$tamano = $_POST['tamano'];

   

    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insertar = "INSERT INTO ingredientes(cantidad,num_proteinas,productoA) VALUES('$cantidad','$tamano','$producto')";
    $conn->exec($insertar);
    echo "<script>alert('Ingresado');window.location.href='../navegacion/entrada.php';</script>";
    
    }
catch(PDOException $e)
    {
    echo $insertar . "<br>" . $e->getMessage();
    }

$conn = null;

}

?>