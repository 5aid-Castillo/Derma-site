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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--  <script src="https://sdk.mercadopago.com/js/v2"></script> -->
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
              <a href="./index.php" class="nav-menu-link-ss nav-link-ss"
                >Inicio</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="./index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                >Contacto</a
              >
            </li>
            
            <li class="nav-menu-item-ss">
              <a href="./index.php#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="./redes.php" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="./tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
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
    <p class="indi">Realiza la transferencia a este numero de cuenta con la cantidad total de tu pedido e ingresa el numero de referencia para poder identificar que has realizado correctamente tu pago.
        No olvides conservar una captura 
    </p>
    <div>
        <p></p>
</div>
    <strong>Una vez que realices la transferencia, presiona </strong>
    

    </section>

<!-- =============================== -->

    <script src="../js/mobileBtn.js"></script>
    <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
    </body>
</html>



    