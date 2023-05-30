<?php 
    include('../db/connect_db.php');
    session_start();  
   
    if(@!$_SESSION['user']){
      echo("<script>location.href = '../account/login.php';</script>");
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
    <link rel="stylesheet" href="../css/estilos-producto.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-checkout.css?v=2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

    
    <title>Datos para envio</title>
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
              <a href="../index.php#contacto" class="nav-menu-link-ss nav-link-ss"
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

    <section class="checkout">
  <form action="" class="form-reg" method="POST">
    <?php
       /* $_COOKIE['id_producto'] = $_GET['id_producto'];  */
       /* if(isset($_GET['id_producto'])){
      $_SESSION['producto'] = $_GET['id_producto'];
       } */
       include('../helpers/form-pay.php'); 
    ?>

      <h1 class="text-center">Ingresa los siguientes datos para envio de tu pedido.</h1>
      
      <!-- ProgressBar -->
      
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Personal"
        ></div>
        <div class="progress-step" data-title="Dirección"></div>
        <div class="progress-step" data-title="Ubicación"></div>
        
      </div>


      <!-- Step 1 -->
      <div class="form-step form-step-active">
        <div class="input-group">
         <label for="nombre">Nombre:</label>
         <input type="text" name="nombre" id="nombre" />
      </div>
      <div class="input-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" />
      </div>
      <div class="input-group">
          <label for="telefono">Número de teléfono</label>
          <input type="text" name="telefono" id="telefono" />
        </div>
      <div>
        <a href="#" class="btn-rgs btn-next width-50 ml-auto">Siguiente</a>
      </div>
    </div>

      <!-- Step 2 -->
      <div class="form-step">
        <div class="input-group">
          <label for="calle">Calle</label>
          <input type="text" name="calle" id="calle"/>
        </div>
        <div class="input-group">
          <label for="exterior">Numero exterior</label>
          <input type="text" name="exterior" id="exterior" />
        </div>
        <div class="input-group">
          <label for="interior">Numero Interior(opcional)</label>
          <input type="text" name="interior" id="interior" />
        </div>
        <div class="input-group">
          <label for="colonia">Colonia</label>
          <input type="text" name="colonia" id="colonia" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn-rgs btn-prev">Regresar</a>
          <a href="#" class="btn-rgs btn-next">Siguiente</a>
        </div>
      </div>

      <!-- Step 3 -->
     <div class="form-step">
       <div class="input-group">
          <label for="postal">Código postal:</label>
          <input type="text" name="postal" id="postal" />
      </div>
      <div class="input-group">
          <label for="ciudad">Ciudad</label>
          <input type="text" name="ciudad" id="ciudad" />
      </div>
      <div class="input-group">
          <label for="estado">Estado</label>
          <input type="text" name="estado" id="estado" />
      </div>
      
     
      <div class="btns-group">
        <a href="#" class="btn-rgs btn-prev ">Regresar</a>
         <input type="submit" value="Enviar" name="send" class="btn-send btn-rgs"/>
         
        </div>
    </div>
  </form>
</section>


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
   
   
    
      
     <script src="../js/formCheckout.js"></script>
     <script src="../js/mobileBtn.js"></script>
     <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>
