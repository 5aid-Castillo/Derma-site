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
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-producto.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-checkout.css?v=2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    
    <title>Tienda</title>
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
              <a href="../index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                >Inicio</a
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
  <form action="../helpers/form-pay.php" class="form-reg" method="POST">

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
        href="https://api.whatsapp.com/send?phone=+51987654321"
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
