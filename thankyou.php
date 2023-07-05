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
    
    <link rel="icon" type="image/png" href="./assets/logo.png"/>
    <link rel="stylesheet" href="css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="css/estilos-payments.css?v=2">
    <link rel="stylesheet" href="index.css?v=2">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   

    <title>Pago realizado</title>
</head>
<body>
<header class="header">
      <nav class="nav">
        <a href="./index.php" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2></a>

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
              <a href="./consulta.php" class="nav-menu-link-ss nav-link-ss"
                >Consulta</a
              >
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
    

    <section class="thankyou">
    <h4 align="center">Gracias por realizar tu pago, atenderemos tu pedido en seguida para hacerte llegar tus productos. 
</h4>

<div class="icons-check" style="display:flex; align-items:center;justify-content:center;flex-direction:column">
 <img src="./assets/senal-aprobada.png" alt="check" style="width:100px; heigth: 100px;margin-top:1.5rem">

 <button type="button" onclick="location.href='./account/order.php'" class="btn btn-success btn-lg" style="margin-top:2rem;">Entendido</button>
</div>


      
   

    </section>

<!-- =============================== -->

    <script src="js/mobileBtn.js"></script>
    <script src="css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
   
    </body>
</html>



    