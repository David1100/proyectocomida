<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
$valse = $_SESSION['usuario'];

function consulta(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$consulta ="SELECT * FROM ingredientes";
$resultado =mysqli_query($conexion,$consulta);
    return $conexion->query($consulta);
  

}    

function consulta2(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$consulta ="SELECT * FROM pedido";
$resultado =mysqli_query($conexion,$consulta);
    return $conexion->query($consulta);
  

} 
function consulta3(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$consulta ="SELECT * FROM registropersonal2";
$resultado =mysqli_query($conexion,$consulta);
    return $conexion->query($consulta);
  

} 
function consultadatossession(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$consulta ="SELECT * FROM registropersonal2 WHERE email = '$valse'";
$resultado =mysqli_query($conexion,$consulta);
    return $conexion->query($consulta);
  

}  


function sumar(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$sumar="SELECT SUM(cantidad) as TotalPrecios FROM ingredientes";
$resultado =mysqli_query($conexion,$sumar); //que te devuelve un array asociativo con el nombre del campo


    return $conexion->query($sumar);     
}

function sumar2(){
$conexion =mysqli_connect("localhost", "root", "" ,"comidas");
$sumar="SELECT SUM(num_proteinas) as TotalPrecios FROM ingredientes";
$resultado =mysqli_query($conexion,$sumar); //que te devuelve un array asociativo con el nombre del campo


    return $conexion->query($sumar);     
}




