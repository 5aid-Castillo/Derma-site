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
   <link rel="stylesheet" href="css/estilos-generales.css?v=2">
   <link rel="stylesheet" href="css/estilos-payments.css?v=2">
   <link rel="stylesheet" href="index.css?v=2">
 
        
    <title>Carrito</title>
</head>
<body>
<header class="header">
      <nav class="nav">
        <a href="/" class="logo nav-link-ss">BeautyCoShop </a>

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
         <!-- <h3><?php echo $_SESSION['producto']; ?></h3> -->
        <div class="buttons-payments">
         <!--  <?php /* if(isset($_SESSION['producto'])){ */?>
            <p class="method">Paga en efectivo con <img src="./assets/oxxo.png" alt="oxxo image" style="width:35px; height:25px"/></p>
            <button class="button-oxxo" onclick="location.href='./oxxo.php?id_producto=<?php echo $_SESSION['producto']?>'">Pagar en efectivo siuuu</button>
          <?php /* } else{ */?> -->
            <p class="method">Paga en efectivo con <img src="./assets/oxxo.png" alt="oxxo image" style="width:35px; height:25px"/></p>
            <button class="button-oxxo" onclick="location.href='./oxxo.php'">Pagar en efectivo</button>
            <?php/*  } */?>
            <p class="method">Paga con transferencia<img src="./assets/transferencia.png" alt="transferencia" style="width:35px; height:25px"/></p>
            <button class="button-transferencia " onclick="location.href='./transferencia.php'">Pagar con transferencia</button>
            
            <p class="method">Paga con mercado pago</p>
          </div>
        

    </section>

<!-- =============================== -->











    <!-- <script>
        Conekta.setPublicKey("");
        
    </script> -->
    <script src="js/mobileBtn.js"></script>
      
    <script src="css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
      

    </body>
</html>



    