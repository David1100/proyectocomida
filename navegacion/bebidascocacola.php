<?php 
session_start();

$valse = $_SESSION['usuario'];
    if(!isset($valse)){
        header("location:../index.php");  
        die();
}
error_reporting(error_reporting() & ~E_NOTICE);
$producto1=$_GET['producto'];   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bebidas.css">
   
    
    
    <title>Ingredientes</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
    <div class="contenedor">
      <header>
           <div class="logo">
               <img src="../img/the-pits.jpg" width="100%" height="100%" alt="">
           </div>
           <div class="titulo">
               <h3>Nombre de demo</h3>    
               <div class="direccion">
                 <p>ciudad: Lorem ipsum dolor sit amet, consectetur consequuntur.</p>
                  
                 <p>Direccion1:  Lorem ipsum dolor sit amet, consectetur consequuntur</p>  
                 <p>Direccion3 : Lorem ipsum dolor sit amet, consectetur consequuntur</p>
               </div>
               <div class="redes">
                  
                       <a href=""><img src="../img/facebook.png" alt="" ></a>
                       <a href=""><img src="../img/instagram2.png" alt=""></a>
                   
               </div>
           </div>
       </header>
       <form action="../php/bebidas.php" method="post" class="cont">
        <div class="contenido">
          <div class="cocacola">
          <div class="b">
           <img src="../img/coca-cola-421.jpg" alt="" width="100%" height="100%">
           <h1>Productos Cocacola</h1>
           </div>  
            </div>
            <div class="contenido_bebidas">
               <div class="combo_cantidad">
               <h3>Cantidad:</h3>
                <select class="form-control" name="cantidad" id="" >
                   <option value="">Seleccione:</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                </div>
                 <div class="combo_producto">
               <h3>Producto:</h3>
                <select class="form-control" name="producto" id="">
                   <option value="">Seleccione:</option>
                    <option value="Cuatro">Cuatro</option>
                    <option value="CocaCola">CocaCola</option>
                    <option value="CocaCola Cero">CocaCola Cero</option>
                    <option value="Sprite">Sprite</option>
                </select>
                </div>
                 <div class="combo_presentacion">
               <h3>Tamaño:</h3>
                <select class="form-control" name="tamano" id="">
                   <option value="">Seleccione:</option>
                    <option value="1200">200 ml-$1200</option>
                    <option value="1300">500 ml-$1300</option>
                    <option value="2200">1 L-$2200</option>
                    <option value="500">2 L-$5000</option>
                </select>
                </div>
                 <div class="btn">
              <button type="submit" class="btn btn-primary" name="insertar">Agregar a la orden</button> 
           </div>
       </div>
            </div>
        </div>
        </form>  
    </div>
     

</body>
</html>