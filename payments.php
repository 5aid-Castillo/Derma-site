<!DOCTYPE html>
<?php 
include('./db/connect_db.php');
session_start();
if(@!$_SESSION['user']){
  echo("<script>location.href = './account/login.php';</script>");
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="./assets/logo.png"/>
   <link rel="stylesheet" href="css/estilos-generales.css?v=2">
   <link rel="stylesheet" href="css/estilos-payments.css?v=2">
   <link rel="stylesheet" href="index.css?v=2">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">


        
    <title>Métodos de pago</title>
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
              <a href="index.php" class="nav-menu-link-ss nav-link-ss"
                >Inicio</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="./consulta.php" class="nav-menu-link-ss nav-link-ss"
                >Consulta</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                >Contacto</a
              >
            </li>
            
            <li class="nav-menu-item-ss">
              <a href="index.php#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="redes.php" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="./account/account.php" class="nav-link-ss">
                <img src="./assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <section class="payments">
        <h2 align="center"><strong>Selecciona el metodo de pago</strong></h2>
        
        <div class="buttons-payments">
         <?php  if(isset($_GET['id_producto'])){ ?>
            
            <p class="method">Paga en efectivo con <img src="./assets/oxxo.png" alt="oxxo image" style="width:35px; height:25px"/></p>
            <button class="button-oxxo" onclick="location.href='./oxxo_pay.php?id_producto=<?php echo $_GET['id_producto']?>'">Pagar en efectivo</button>
            <p class="method">Paga con transferencia<img src="./assets/transferencia.png" alt="transferencia" style="width:35px; height:25px"/></p>
            <button class="button-transferencia " onclick="location.href='./transferencia.php?id_producto=<?php echo $_GET['id_producto']?>'">Pagar con transferencia</button>
            
          <?php }else{ ?>
            <p class="method">Paga en efectivo con <img src="./assets/oxxo.png" alt="oxxo image" style="width:35px; height:25px"/></p>
            <button class="button-oxxo" onclick="location.href='./oxxo.php'">Pagar en efectivo</button>
            <p class="method">Paga con transferencia<img src="./assets/transferencia.png" alt="transferencia" style="width:35px; height:25px"/></p>
            <button class="button-transferencia " onclick="location.href='./transferencia.php'">Pagar con transferencia</button>
            
          <?php  } ?>
            <p class="method">Paga con Paypal</p>
            <div id="paypal-button-container"></div>
            <!-- Replace "test" with your own sandbox Business account app client ID -->
            
            
          </div>
          
        </section>

        <?php 
          $id_user = $_SESSION['idu'];
            if(isset($_GET['id_producto'])){
              $sql = mysqli_query($link,"SELECT * FROM directo WHERE id_usuario = '$id_user' ORDER BY id_compra DESC LIMIT 1 ");
              $result = mysqli_fetch_array($sql);
              $link = "./send-paypal-pay.php";
              
        }else{
          $sql = mysqli_query($link,"SELECT SUM(subtotal_cart) as tot FROM carrito WHERE id_usuario = $id_user");
          $result = mysqli_fetch_array($sql);
              $link = "./send-paypal.php";
        }
      ?>
        <!-- =============================== -->
        <script src="js/mobileBtn.js"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=Af36IPq7PCAIYRFjqKAmUsOyitbCMGcnL-WEjZQ1a9CTC2-Iqu8e53oh0uRNvG-kmp8TgEEDZnSH7QCx&currency=MXN"></script>
    
    <script>
      paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder: function(data,actions) {
          return actions.order.create({
            purchase_units: [{
              amount:{
                value:<?php echo $result['tot'];?>
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
          	
          	if(details.status == 'COMPLETED'){
          		location.href="<?php echo $link?>"
          	}
           
          });
        }
      }).render('#paypal-button-container');
    </script>

    <script src="css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> 
    </body>
</html>



    