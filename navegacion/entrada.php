
<?php
session_start();
//session_destroy();
$valse = $_SESSION['usuario'];
    if(!isset($valse)){
        header("location:../index.php");  
        die();
    }
   
include '../conexion/conectar.php';
include_once '../php/entradaTabla.php';
$consult = consulta();
$consult2 = consulta2();
$suma = sumar();
$suma2 = sumar2();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilosentrada.css">
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
           <div class="titulo2">
               <h2>TITULO DE LOCAL</h2>
           </div>
               <div class="form-group">
                    <select class="form-control" id="sel1" onchange="mostrarInputs(this.value)">
                      <option value="1" >Mostrar todo</option>
                      <option value="2">Comidas</option>
                      <option value="3" >Bebidas</option>
                    </select>
                  </div>  
           <div class="ingredientes" id="ingre">
             
               <div class="opcion" id="opcion1" >
                   <h4>Arepa</h4>
                   
                   <a href="ingredientes2.php?producto=Arepa">
                   
                   <div>
                   
                   <img src="../img/img_arepas_de_fibra_58300_600.jpg" alt="" width="100%" height="100%">    
                   </div>
                   
                   </a>
                  
                  
                   </div>
       
               <div class="opcion" id="opcion2">
                  <h4>Desgranado</h4>
                  
                  <a href="ingredientes2.php?producto=Desgranado">
                  
                  <div>
                  <img src="../img/desgranado_con_adiciones_0.jpg" alt="" width="100%" height="100%"> 
                  </div>
                
                  </a>
                 
                   </div> 
              <div class="opcion" id="opcion3">
                   <h4>Papas</h4>
                
                   <a href="papas.php">
                   
                   <div>
                     <img src="../img/sibzamini-1.jpg" alt="" width="100%" height="100%"> 
                   </div>     
                   
                   </a> 
                      
               </div>
               
               </div>
                <div class="ingredientes" id="bebidas">
             
               <div class="opcion" id="opcion1" >
                   <h4>Cocacola</h4>
                   
                   <a href="bebidascocacola.php">
                   
                   <div>
                   
                   <img src="../img/coca-cola-421.jpg" alt="" width="100%" height="100%">    
                   </div>
                   
                   </a>
                  
                  
                   </div>
       
              <div class="opcion" id="opcion3">
                   <h4>Postobon</h4>
                
                   <a href="bebidaspostobon.php">
                   
                   <div>
                     <img src="../img/postobonlogo.jpg" alt="" width="100%" height="100%"> 
                   </div>     
                   
                   </a> 
                      
               </div>
               
               </div>
               </div>
                <div class="contenido2">
              <div class="orden">
                   <img src="../img/food.png" alt="" width="32px" height="32px">
                       <?php 
                            while ( $pedido=$consult2->fetch_assoc())
                            {
                                
                            ?>   
                    <h3>Esta es su Orden<?php echo $pedido['id']?></h3>
                       <?php 
          
                            }
          
                            ?>
                    
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
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h4>Cantidad</h4></th>
        <th><h4>Producto</h4></th>
        <th><h4>Precio</h4></th>
        <th><h4>Borrar</h4></th>
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
      <h6>Prot:<?php echo  $con['proteina1'];?><?php echo $con['proteina2'];?><?php echo $con['proteina3'];?><?php echo $con['proteina4'];?><?php echo $con['proteina5'];?></h6>
      <h6>Comp:<?php echo $con['componente1'];?><?php echo $con['componente2'];?><?php echo $con['componente3'];?><?php echo $con['componente4'];?><?php echo $con['componente5'];?><?php echo $con['componente6'];?><?php echo $con['componente7'];?><?php echo $con['componente8'];?><?php echo $con['componente9'];?><?php echo $con['componente10'];?></h6>
      <h6>Sals:<?php echo $con['salsa1'];?><?php echo $con['salsa2'];?><?php echo $con['salsa3'];?><?php echo $con['salsa4'];?><?php echo $con['salsa5'];?><?php echo $con['salsa6'];?><?php echo $con['salsa7'];?></h6>
      </td>
      <td><?php echo $con['num_proteinas'];?></td>
      <td id="btn-borrar" > 
      <a href="../php/eliminartabla.php?borrar=<?php echo $codigo;?>" ><img src="../img/x-button.png" alt=""></a>
      </td>
       
      </tr>
     <?php 
          
      }
          
      ?>
      
      
    </tbody>
  </table>
                </div>
            <div class="btn">
              <a href="../navegacion/orden.php"><button type="submit" class="btn btn-primary" name="insertar">Ordenar</button></a>
           </div>
               </div>
           </div>
           
        </div>
      <script type="text/javascript">
    
        
   function mostrarInputs(dato) {
		if (dato == "3") {
			$("#ingre").hide('100ms');
            $("#bebidas").show('100ms');
		}else if(dato == "1"){
            $('#ingre').show('100ms');
            $("#bebidas").show('100ms');
        }else if(dato == "2"){
            $('#ingre').show('100ms');
            $("#bebidas").hide('100ms');
        }
	}
        

       
</script>
  
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/jquery.js"></script>
</body>
</html>



