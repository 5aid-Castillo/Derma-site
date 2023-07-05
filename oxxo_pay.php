<!DOCTYPE html>
<?php
error_reporting(0);
include('./db/connect_db.php');
session_start();

include('./server/oxxo-pay.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="./assets/logo.png"/>

    <link rel="stylesheet" href="css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
		<link href="./opps_es_files/styles.css?v=2" media="all" rel="stylesheet" type="text/css">
		<link href="file:///Users/lizbethgamez/Downloads/oxxopay-payment-stub-master/demo/css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="css/estilos-payments.css?v=2">
    <link rel="stylesheet" href="index.css?v=2">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

        
    <title>Pago con Oxxo</title>
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
    

    <section class="payments">
    <p class="indi">Guarda el número de referencia y finaliza el pago.</p>
    
    <!-- <p class="indi">Presiona el botón de confirmar una vez que guardés el número de referencia para que tu pago se haga válido y obtengamos tu información.</p>
     --><div class="confirmar">
      <button class="ok-btn" onclick="location.href='./helpers/add-oxxopay-order.php'">Finalizar Pedido</button>  
    </div>   
    <div class="opps">
			<div class="opps-header">
				<div class="opps-reminder"> Fecha digital con limite de pago: 3 dias a partir de ahora</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="./opps_es_files/oxxopay_brand.png" alt="OXXOPay"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2>$ <?php echo $order->amount/100?> <sup>MXN</sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.<?php /* echo $cook['id_compra'] */?></p>
					</div>
				</div>
				<div class="opps-reference">
					<h3>Referencia</h3>
					<h1><?php echo $order->charges[0]->payment_method->reference?></h1>
				</div>
			</div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				<ol class="list-oxxo">
					<li class="oxxo-item">Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
					<li class="oxxo-item">Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>
					<li class="oxxo-item">Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
					<li class="oxxo-item">Realiza el pago correspondiente con dinero en efectivo.</li>
					<li class="oxxo-item">Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<!-- <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
		 -->	</div>
		</div>
      
    

    </section>

<!-- =============================== -->

    <script src="./js/mobileBtn.js"></script>
    <script src="css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
    </body>
</html>



    