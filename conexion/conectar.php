<?php
try{

$connection = new PDO("mysql:host=localhost;dbname=comidas","root","");
$connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->exec("SET CHARACTER SET utf8");


}catch(Exception $ex){
die("Error" . $ex->getMessage());
echo "Linea del error" . $ex->getLine();
}