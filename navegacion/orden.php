<?php

session_start();
$valse = $_SESSION['usuario'];
    if(!isset($valse)){
        header("location:../index.php");  
        die();
    }

include_once '../php/entradaTabla.php' ;
$consult = consulta();
$consultnom = consulta3();
$consultele = consulta3();
$consultasession =consultadatossession();
$suma = sumar();
$suma2 = sumar2();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="../css/orden.css">
    <link rel="stylesheet" href="../fontss/style.css">
    <title>Inicio</title>
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
       <div class="form">
        <div class="contenido1">
          <form action="">
           <div class="titulo2">
               <h2>TITULO DE LOCAL</h2>
               <h3>Datos de la orden</h3>
               </div>
                 <div class="metentrega">
                    
                     <h4>Seleccione el metodo de entrega</h4>
                     <div class="radio">
                       
                         <label >
                           <input type="radio" value="" name="comer" id="domicilio" required>A domicilio
                         </label>
                           <label >
                           <input type="radio" value="" name="comer" id="recoger" required>Recoger en local
                         </label>
                         <label >
                         <input type="radio" value="" name="comer" id="comer" required>Comer en local
                         </label>
                       
                     </div>
                     <div class="datos">
                         <div class="a">
                             <h3>Nombre</h3>
                              <?php 
                             while ( $con=$consultasession->fetch_assoc())
                                {    
                               ?>
                             <h4><?php echo $con['nombre'] ?></h4>
                              <?php 
          
                                }
          
                                ?>
                         </div>
                         <div class="b">
                             <h3>Telefono</h3>
                               <?php 
                             while ( $con=$consultele->fetch_assoc())
                                {    
                               ?>
                             <h4><?php echo $con['telefono'] ?></h4>
                              <?php 
          
                                }
          
                                ?>
                         </div>
                          <div class="form-group" id="reco">
                          <h3>Hora que recogerá el producto</h3>
                          <input type="text" class="form-control" id="usr" >
                          </div>
                        <div class="form-group">
                          <h3>Direccion</h3>
                          <input type="text" class="form-control" id="usr" required>
                          </div>
                     </div>
                     
                 </div>
          <div class="btn">
              <button type="submit" class="btn btn-primary" name="insertar" id="in">Enviar orden</button> 
           </div>
              </form>
               </div>
               
                <div class="contenido2">
                   <div class="orden">
               <img src="../img/food.png" alt="" width="32px" height="32px">     
                     
                    <h3>Esta es su Orden</h3>
                         
                </div>
                <div class="cont">
                    <div class="producto">
                       <img src="../img/menu.png" alt="">
                        <?php 
                            while ( $sum=$suma->fetch_assoc())
                            {
                                
                            ?>
                         <h2><?php echo $sum['TotalPrecios']?>Producto(s)</h2>
                         <?php 
          
                            }
          
                            ?>
     
                    </div>
                    <div class="total">
                       <img src="../img/moneda.png" alt="">
                       <?php 
                        while ( $sum=$suma2->fetch_assoc())
                          {
                          ?>
                        <h2>Total:$<?php echo $sum['TotalPrecios']?></h2>
                         <?php          
                         }       
                         ?>
                    </div>
                </div>
                 <div class="table-responsive">            
  <table  class="table table-hover">
    <thead>
      <tr>
        <th>Cant</th>
        <th>Producto</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ( $con=$consult->fetch_assoc())
      {    
      ?>
      <tr>
      <td hidden=""><?php echo $codigo=$con['codigo'];?></td>
      <td><?php echo $con['cantidad'];?></td>
      <td><?php echo $con['productoA'];?>
      <br> 
      <h6>Prot:<?php echo $con['proteina1'];?><?php echo $con['proteina2'];?><?php echo $con['proteina3'];?><?php echo $con['proteina4'];?><?php echo $con['proteina5'];?></h6>
      <h6>Comp:<?php echo $con['componente1'];?><?php echo $con['componente2'];?><?php echo $con['componente3'];?><?php echo $con['componente4'];?><?php echo $con['componente5'];?><?php echo $con['componente6'];?><?php echo $con['componente7'];?><?php echo $con['componente8'];?><?php echo $con['componente9'];?><?php echo $con['componente10'];?></h6>
      <h6>Sals:<?php echo $con['salsa1'];?><?php echo $con['salsa2'];?><?php echo $con['salsa3'];?><?php echo $con['salsa4'];?><?php echo $con['salsa5'];?><?php echo $con['salsa6'];?><?php echo $con['salsa7'];?></h6>
      </td>
      <td><?php echo $con['num_proteinas'];?></td>
     
       
      </tr>
     <?php 
          
      }
          
      ?>
      
        
      
    </tbody>
  </table>
                </div>
            
               </div>
           </div>
           
        </div>
     <script type="text/javascript">
        
 
    $(document).ready(function(){
    
     $( "#domicilio" ).on( "click", function() {
        $("#reco").hide('100ms');
    });
         $( "#recoger" ).on( "click", function() {
        $("#reco").show('100ms');
    });
       $( "#comer" ).on( "click", function() {
        $("#reco").show('100ms');
    });
});
    </script>
   
</body>
</html>