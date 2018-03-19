<?php
error_reporting(error_reporting() & ~E_NOTICE);

$usuario = $_POST['email'];
$contrasena = $_POST['contrasena'];

if(isset($_POST['ingresar'])){
    
$conexion =mysqli_connect("localhost", "root", "123456" ,"comidas");
$consulta ="SELECT * FROM registropersonal2 WHERE email='$usuario' and contrasena='$contrasena'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
$mensaje .= '<i>error </i>';
if ($filas>0){
    header("location:../navegacion/entrada.html");
}
else {
    echo $mensaje;
}
    }else if (isset($_POST['registarme'])){
    header("location:../navegacion/formularioRegistro.html");
}