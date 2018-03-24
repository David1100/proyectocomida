<?php

error_reporting(error_reporting() & ~E_NOTICE);

$usuario = $_POST['email'];
$contrasena = $_POST['contrasena'];

$_SESSION['usuario']=$usuario;

if(isset($_POST['ingresar'])){
    
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$consulta ="SELECT * FROM registropersonal2 WHERE email='$usuario' and contrasena='$contrasena'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas!=0){
    session_start();
    $_SESSION['usuario'] = $_POST['email'];
    if($_SESSION['usuario']== 'admin'){
    header("location:../navegacion/panel_admin.php");
        }else {
        header("location:../navegacion/entrada.php");
    }
}
else {
    echo "<script>alert('Email o Contraseña invalida');window.location.href='../index.php';</script>";
}
    }else if (isset($_POST['registarme'])){
    header("location:../navegacion/formularioRegistro.php");
}

