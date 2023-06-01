<?php 
    include('../db/connect_db.php');
    session_start();   
?>
<!DOCTYPE html>

<html lang="en">
  <head>
      
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/logo.png"/>
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-producto.css?v=2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <title>Productos</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="/" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2></a>

        <button class="nav-toggle" aria-label="Abrir menú">
          <!-- <i class="fas fa-bars"></i> -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="40"
            viewBox="0 0 24 24"
          >
            <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
          </svg>
        </button>
        <div class="navbar-main">
          <ul class="nav-menu">
            <li class="nav-menu-item-ss">
              <a href="../index.php" class="nav-menu-link-ss nav-link-ss"
                >Inicio</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../consulta.php" class="nav-menu-link-ss nav-link-ss"
                >Consulta</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                >Contacto</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../index.php#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../redes.php" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="../account/account.php" class="nav-link-ss">
                <img src="../assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<?php 
    if(isset($_GET['id_producto'])){
        $query = $link ->query("SELECT * FROM productos WHERE id_producto=".$_GET['id_producto']) or die($link->error);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_row($query);
        }else{
            echo("<script>location.href = '../index.php';</script>");
        }
    }else{
        echo("<script>location.href = '../index.php';</script>");
    }

    $notValue = 'Ninguno'; 
?>

   <section class='product container'>
        <div class="detailsContainer">
            <img src="../img/products/<?php echo $row[2]?>" class="col prodImage" alt="<?php echo $row[1]?>"> 
            <div class="col prodDetails">
                <p class="firstItem"><strong style="font-size:1.2rem"><?php echo $row[1]?></strong></p><br>
                <p><strong>Descripción:</strong>&nbsp;<?php echo $row[3]?></p>
                <p><strong>Categoría:</strong>&nbsp;<?php echo $row[6]?></p>
                <?php $p = $row[5]; $desc = $row[7]; $subtotal = ($p * $desc) / 100;
                      $total = $p - $subtotal;?>

                
                <p><strong>Precio:&nbsp;</strong><strong style="color:rgb(34, 139, 34);">$<?php if($row[7] > 0){echo $total;}else{echo $row[5];}?></strong/></p>
                <p><strong>Promoción:</strong>&nbsp;<?php if($row[7] == 0){ echo "Sin promoción";}else{echo $row[7]; echo"% de descuento";} ?></p>
                <p><strong>Contenido:</strong>&nbsp;<?php echo $row[8]; echo $row[9]?></p>
                <p><strong>Recomendaciones:</strong>&nbsp;<?php echo $row[10]?></p>
                
                <input id="stock" class="stock" style="display:none" value="<?php echo $row[11];?>" min="1" max="100" disabled>
                
                
               <!--  <p><strong>Cantidad:&nbsp;</strong><button onclick="restar()" class="btn-count" id="menos" >-</button><input type="number" class="input-box"  name="contador" id="contador" value="1" min="1" max="100" style="font-size: 20px;  text-align:center;border-radius: 5px;width: 20%;height: 35px;background:  #ded1c1; border: 1px solid #006991; color: black; font-weight: bold;"disabled><button onclick="sumar()"class="btn-count" id="mas" >+</button></p>
                --> <p><strong>Cantidad:&nbsp;</strong><button onclick="restar()" class="btn-count" id="menos" >-</button><input type="number" class="input-box"  name="contador" id="contador" value="1" min="1"  max="9" style="font-size: 20px;  text-align:center !important;border-radius: 5px;width: 12%;height: 35px;background:  transparent;  color: black; font-weight: bold;"disabled><button onclick="sumar()"class="btn-count" id="mas" >+</button></p>
                 <!--  
                 <p><strong>Total:&nbsp;</strong><input id="importe" type="number" style="width:50px;text-align:center;color:rgb(34, 139, 34); font-weight:bold" disabled/></p>
                 --> 
                <div class="choose">
               <!--   -->
                    <?php if($row[7] == 0){?>
                      <!-- <button class="button-cart"  type="button"  onclick="location.href='../helpers/add-cart.php?id_producto=<?php echo $row[0]?>'; "  >Agregar &nbsp;<img src="../assets/cart.png" class="icon2"alt=""></button>
                       --><!-- <button class="button-cart"  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar &nbsp;<img src="../assets/cart.png" class="icon2"alt=""></button>
                       --><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Agregar &nbsp;<img src="../assets/cart.png" class="icon2"alt=""></button>
                      <?php }?>
                   
                   
                    <!-- <button class="button-buy disabled" onclick="send2($('#contador').val());return false;"
                    
                   
aria-disabled="true"
                    >Comprar</button> -->

                
                    <a class="btn btn-success" id="btn-stock" role="button" aria-disabled="true" onclick="send2($('#contador').val());return false;">Comprar</a>
                      
                        <!-- <button class="button-buy" onclick="location.href='./checkout.php?id_producto=<?php echo $row[0];?>'">Comprar</button>
                -->   </div>
                              <br>
                <div class="btn-back">
                  <button class="button-back" onclick="location.href='../tienda.php'">Regresar</button>
                </div>    
            </div>
        </div>

   </section>

<!-- Modal -->
<?php if(@!$_SESSION['user']){ ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Para agregar productos a tu carrito, necesitas registrarte o iniciar sesión.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-dark" onclick="location.href='../account/login.php'">Iniciar sesión</button>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>

    

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Deseas agregar esto a tu carrito?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="product_cart1">
          <img src="../img/products/<?php echo $row[2]?>" style="width:30px; height:30px" alt=""/>
          <p> <?php echo $row[1]?></p>
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-dark" onclick="send($('#contador').val());return false;">Agregar</button>
      </div>
    </div>
  </div>
</div> 

  <?php }?>
    <!-- WhatsApp -->

    <div class="chat">
      <a
        href="https://wa.me/522212193377?text=Hola!%20quiero%20saber%20más%20sobre%20sus%20servicios."
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>

   
   
    <script type="text/javascript">
      
     function sumar(){
        document.getElementById('contador').stepUp();
        const cant = document.getElementById('contador').value;
        const stock = document.getElementById('stock').value;
        

        
        if(cant > stock){ 
          $("#btn-stock").addClass("disabled");
          $("#btn-stock").prop("disabled",true);
          $("#btn-stock").text("Sin productos");  
        }else{
           
          $("#btn-stock").removeClass("disabled");
          $("#btn-stock").prop("disabled",false);
          $("#btn-stock").text("Comprar"); 
        }
        }
      function restar(){
        document.getElementById('contador').stepDown();
        var cant= document.getElementById('contador').value;
        var stock = document.getElementById('stock').value;
        if(cant <= stock){
          $("#btn-stock").removeClass("disabled");
          $("#btn-stock").prop("disabled",false);
          $("#btn-stock").text("Comprar");
          
        } else{
          
          $("#btn-stock").addClass("disabled");
          $("#btn-stock").prop("disabled",true);
          $("#btn-stock").text("Sin productos");
        }  
        } 

      function send(contador){
     
        var count = {
          "contador": contador
        };
        $.ajax({
          data:count,
          url:'../helpers/add-cart.php?id_producto=<?php echo $row[0]?>',
          type:'post',
          success: function (response){
              location.href="../account/cart.php"
          }
        })
      }
       function send2(contador){
        var count = {
          "contador": contador

        };
        $.ajax({
          data:count,
          url:'../helpers/add-buy.php?id_producto=<?php echo $row[0]?>',
          type:'post',
           success:function(response){
            location.href="../pages/checkout.php?id_producto=<?php echo $row[0]?>"
           
          } 
        })
      } 
      
    </script>
     <script src="../js/mobileBtn.js"></script>
     <script>

</script>
     
     <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>
