<?php

session_start();
session_destroy();
$valse = $_SESSION['usuario'];
    if(!isset($valse)){
        header("location:../index.php");  
        die();
}
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estiloFormRegistro.css">
    
    <title>Registro</title>
</head>
<body>
   <div class="contenedor">
     <header>
           <div class="titulo">
               <img src="../img/the-pits.jpg" width="150px"  alt="">
           </div>
       </header>
       <div class="contenido">
           <div class="titulo">
               <h1>Datos de Registro</h1>
           </div>
           <div class="form1">
    <form action="../php/registro.php"  method="post">
  <div class="form-group">
    <label for="email">Nombre:</label>
    <input type="text" class="form-control" id="email" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="pwd">Apellido:</label>
    <input type="text" class="form-control" id="pwd" name="apellido" required>
  </div>
  <div class="form-group">
    <label for="pwd">Direccion:</label>
    <input type="text" class="form-control" id="pwd" name="direccion" required>
  </div>
  <div class="form-group" id="barrio">
   <div class="b">
    <label for="pwd">Barrio:</label>
    <input type="text" class="form-control" id="pwd" name="barrio" required>
    </div>
    <div class="m">
     <label for="pwd">Municipio:</label>
    <select type="text" class="form-control" id="pwd" name="municipio" required>  
    <option>Piedecuesta</option>
    <option>Giron</option>
    <option>Floridablanca</option>
    <option>Bucaramanga</option>
  </select>
    </div>      
  </div>
  <div class="form-group" id="ema">
   <div class="email">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" id="pwd" name="email" required> 
   </div> 
    <div class="dia">
     <label for="pwd">dia:</label>
    <input type="int" class="form-control" id="pwd" name="dia" onkeypress="return valida(event)" required>
   </div>
   <div class="mes">
     <label for="pwd">mes:</label>
    <input type="int" class="form-control" id="pwd" name="mes" onkeypress="return valida(event)" required>  
   </div>
  </div>
  <div class="form-group" id="tel">
   <div class="tel1">
    <label for="pwd">Telefono1:</label>
    <input type="text" class="form-control" id="pwd" name="telefono"  onkeypress="return valida(event)" required>  
   </div>
  <div class="tel2">
    <label for="pwd">Telefono2:</label>
    <input type="text" class="form-control" id="pwd" name="telefono2" onkeypress="return valida(event)" required>  
  </div>
  </div>
  <div class="form-group">
    <label for="pwd">Contraseña:</label>
    <input type="password" class="form-control" id="pwd" name="contrasena"  required>
  </div>
  <div class="btn1">
     <button type="submit" class="btn btn-primary" name="insertar">Registrar</button> 
  </div>
</form>
</div>
</div>
  </div>
   <script type="text/javascript">
       
 function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
             
    </script>
   
   
   
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/jquery.js"></script>
</body>
</html>