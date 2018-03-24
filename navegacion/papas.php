<?php 
error_reporting(error_reporting() & ~E_NOTICE);
session_start();

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
    <link rel="stylesheet" href="../css/ingredientes.css">
    <link rel="stylesheet" href="../php/ingredientes.php">
    
    
    <title>Ingredientes</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
    <div class="contenedor">
        <header>
           <div class="titulo">
               <img src="../img/the-pits.jpg" width="150px" height="100px" alt="">
           </div>
       </header>
       <form action="../php/ingredientes.php" method="post">
       <div class="contenido">
          <div class="opciones">  
            <div class="paso1">
               <h2>Escoje el tipo de papa</h2>
                <p><input type="radio" value="1" name="uno" checked>
              </p>
             <div class="paso11">     
              <p>
              <input type="radio" value="Francesa" id="f" name="nif">
              <label class="radio-inline" for="f">Francesa</label>   
              </p>         
              <p>
              <input type="radio" value="Casquitos" id="c" name="nif" >
              <label class="checkbox-inline" for="c">Casquitos</label>   
              </p>
               <p>
              <input type="radio" value="Criolla" id="cr" name="nif" >
              <label class="checkbox-inline" for="cr">Criolla</label>   
              </p>
              </div>
            </div>
            <div class="paso2">
              <h2>Escoja el numero de proteinas</h2>
              <div class="paso22">     
              <p>
              <input type="radio" value="9800" id="1" name="proteina">
              <label class="radio-inline" for="1">(una) Proteina $9.800</label>   
              </p>         
              <p>
              <input type="radio" value="12800" id="2" name="proteina" >
              <label class="checkbox-inline" for="2">(Dos) Proteinas $12.800</label>   
              </p>
              </div>
              <div class="cuales">
              <h3>Cuales?</h3>
              <div id="cuales2" class="cuales2">
              <p>
               <input type="checkbox" value="Cerdo Bbq" id="cerdo" class="micheckbox-2" name="cerdo">
               <label class="checkbox-inline" for="cerdo">Cerdo Bbq</label>  
              </p>
             
              <p>
              <input type="checkbox" value="Carne mechada" id="carmec" class="micheckbox-2" name="carmec">
              <label class="checkbox-inline" for="carmec">Carne mechada</label>   
              </p>
              <p>
              <input type="checkbox" value="Tocineta" id="Tocineta" class="micheckbox-2" name="Tocineta">
              <label class="checkbox-inline" for="Tocineta">Tocineta</label>    
              </p>
              <p>
              <input type="checkbox" value="Pollo mechado" id="pollo" class="micheckbox-2" name="pollo">
              <label class="checkbox-inline" for="pollo">Pollo mechado</label>   
              </p>
              </div>   
              </div>   
           </div>
           
           
           <div class="paso3">
              <h2>Escoje 3 de estos componentes</h2>
              <div class="paso33">
              <p>
              <input type="checkbox" value="Chicharron" id="chicha" name="chicha" class="micheckbox-3">
              <label class="checkbox-inline" for="chicha">Chicharron</label>    
              </p>
              <p>
              <input type="checkbox" value="Chorizo" id="chorizo" name="chorizo" class="micheckbox-3">
              <label class="checkbox-inline" for="chorizo">Chorizo</label>    
              </p>
              <p> 
              <input type="checkbox" value="Platanitos" id="platanitos" name="platanitos" class="micheckbox-3">
              <label class="checkbox-inline" for="platanitos">Platanitos</label>  
              </p>
              <p>
              <input type="checkbox" value="Queso" id="queso" name="queso" class="micheckbox-3">
              <label class="checkbox-inline" for="queso">Queso</label>    
              </p>
              <p>
              <input type="checkbox" value="Suero costeno" id="suero" name="suero" class="micheckbox-3">
              <label class="checkbox-inline" for="suero">Suero costeño</label>    
              </p>
              <p>
              <input type="checkbox" value="Maiz" id="maiz" name="maiz" class="micheckbox-3">
              <label class="checkbox-inline" for="maiz">Maiz</label>    
              </p>
              <p>
              <input type="checkbox" value="Pico de gallo" id="pico" name="pico" class="micheckbox-3">
              <label class="checkbox-inline" for="pico">Pico de gallo</label>
              </p>
              <p>
              <input type="checkbox" value="lechuga" id="lechuga" name="lechuga" class="micheckbox-3">
              <label class="checkbox-inline" for="lechuga">Lechuga</label>    
              </p>
              <p>
              <input type="checkbox" value="Huevo de codorniz" id="huevo" name="huevo" class="micheckbox-3">
              <label class="checkbox-inline" for="huevo">Huevo de codorniz(4)</label>     
              </p>
              </div>
           </div>
           
           <div class="paso4">
              <h2>Escoja las salsas(Todas las que desees)</h2>
              <div class="paso44">
              <p>
              <input type="checkbox" value="Pina" id="piña1" name="piña">
              <label class="checkbox-inline" for="piña1">Piña</label>    
              </p>
              <p>
              <input type="checkbox" value="Tartara" id="tartara1" name="tartara">
              <label class="checkbox-inline" for="tartara1">Tartara</label>     
              </p>
              <p>
              <input type="checkbox" value="Guacamole" id="guacamole1" name="guacamole">
              <label class="checkbox-inline" for="guacamole1">Guacamole</label>    
              </p>
              <p>
              <input type="checkbox" value="Kenko" id="kenko1" name="kenko">
              <label class="checkbox-inline" for="kenko1">Kenko(maiz)</label>    
              </p>
              <p>
              <input type="checkbox" value="Rosada" id="rosada1" name="rosada">
              <label class="checkbox-inline" for="rosada1">Rosada</label>    
              </p>
              <p>
              <input type="checkbox" value="Mostaza" id="mostaza1" name="mostaza">
              <label class="checkbox-inline" for="mostaza1">Mostaza</label>    
              </p>
              <p>
              <input type="checkbox" value="Ajo" id="arepa1" name="ajo">
              <label class="checkbox-inline" for="arepa1">Ajo</label>    
              </p>
              </div>             
           </div>
           
            <div class="paso5">
             <div class="paso55">     
              <p>
              <input type="checkbox" value="3000" id="5" name="adicional" >
              <label class="radio-inline" for="5">Proteina adicional - $3.000</label>   
              </p>         
              <p>
              <input type="checkbox" value="2000" id="3" name="adicional2" >
              <label class="checkbox-inline" for="3">Complemento adicional - $2.000</label>   
              </p>
              </div>
            </div>
          </div>
           <div class="btn">
              <button type="submit" class="btn btn-primary" name="insertar">Agregar a la orden</button> 
           </div>
       </div>
       
        </form>
         

        
    </div>
     
 <script>
  $(document).ready(function(){

    var variable_conteo = 0;
    $(".paso22 > p > input[type='radio']").click(function(){
        variable_conteo = $(this).attr("id");
        $(".micheckbox-2:checked").attr("checked",false);
        $(".micheckbox-2:checked").attr("disabled",false);
    });

    $(".cuales2 > p > input[type='checkbox']").click(function(){
     
      var conteo = 1;
      $('.micheckbox-2:checked').each(
          function() {
              if(conteo>variable_conteo){
                $(this).attr("checked",false);
              }
              conteo++;
          }
      );

    });         
    
  });
</script>
<script type="text/javascript">
    
$(document).on('change', '.micheckbox-3', function() {
    var countShared = $('.micheckbox-3:checked').length;
    if(countShared > 3 && $(this).is(':checked')) {
        $(this).prop('checked',false);
    }
});    

</script>

</body>
</html>