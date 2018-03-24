<?php
error_reporting(error_reporting() & ~E_NOTICE);


if (isset($_POST['insertar'])){
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comidas";


    
$numprote = $_POST['proteina'];
$proteina1 = $_POST['cerdo'];
$proteina2 = $_POST['carmol'];
$proteina3= $_POST['carmec'];
$proteina4 = $_POST['molleja'];
$proteina5 = $_POST['pollo'];
$componente1 = $_POST['chicha'];
$componente2 = $_POST['chorizo'];
$componente3 = $_POST['platanitos'];
$componente4 = $_POST['morcilla'];
$componente5 = $_POST['queso'];
$componente6 = $_POST['suero'];
$componente7 = $_POST['maiz'];
$componente8 = $_POST['pico'];
$componente9 = $_POST['lechuga'];
$componente10 = $_POST['huevo'];
$salsa1 = $_POST['piña'];
$salsa2 = $_POST['tartara'];
$salsa3 = $_POST['guacamole'];
$salsa4 = $_POST['kenko'];
$salsa5 = $_POST['rosada'];
$salsa6 = $_POST['mostaza'];
$salsa7 = $_POST['ajo'];
$cantidad = $_POST['uno'];
$productoA = $_POST['nif'];
   

    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $insertar = "INSERT INTO ingredientes(cantidad,num_proteinas,proteina1, proteina2, proteina3,proteina4,proteina5,componente1,componente2,componente3,componente4,componente5,componente6,componente7,componente8,componente9,componente10,salsa1,salsa2,salsa3,salsa4,salsa5,salsa6,salsa7,productoA) VALUES('$cantidad','$numprote', '$proteina1', '$proteina2','$proteina3','$proteina4','$proteina5','$componente1','$componente2','$componente3','$componente4','$componente5','$componente6','$componente7','$componente8','$componente9','$componente10','$salsa1','$salsa2','$salsa3','$salsa4','$salsa5','$salsa6','$salsa7','$productoA')";

   
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
       
  