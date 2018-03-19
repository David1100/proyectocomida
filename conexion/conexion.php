<?php
$conexion =mysqli_connect("localhost","root","","comidas");
if(!$conexion){
    echo 'Error de conexion';
}
else {
    echo 'Conectado';
}