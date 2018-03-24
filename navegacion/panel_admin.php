   <?php

session_start();

    $valse = $_SESSION['usuario'];
    
    if ( $valse == null || $valse != 'admin'){
    header("location:../index.php");  
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido administrador</h1>
   <?php

echo "hola" . $_SESSION['usuario'] ."<br>";

?> 


</body>
</html>