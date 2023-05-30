<?php 
    include('../db/connect_db.php');
    session_start();   
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../account/account.php';</script>");
    }
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
    <link rel="stylesheet" href="../css/estilos-consulta.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-checkout.css?v=2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

    
    <title>Consulta</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="/" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2> </a>

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
   <section class="confi">
        
        <h3>Consulta realizada con éxito.</h3>
        <p>Un dermatólogo profesional te contactará para realizar la consulta en línea.</p>

        <div class="confrm">
            <button type="button" class="btn btn-success" onclick="location.href='../index.php'">Entendido</button>
    
        </div> 
        <p class="dont">No olvides conservar tu comprobante de pago para futuras referencias.</p>
        <style>.confrm{display:flex;align-items:center;justify-content:center;} .confi{ padding:1rem}.dont{margin-top:2rem}</style>
   </section>

    <!-- WhatsApp -->

    <div class="chat">
      <a
        href="https://wa.me/522212193377?text=Hola!%20quisiera%20saber%20sobre%20sus%20consultas%20en%20linea."
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>

   
   
     <script src="../js/formCheckout.js"></script>
     <script src="../js/mobileBtn.js"></script>
     <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>
