<!DOCTYPE html>
<?php
include('./db/connect_db.php');
session_start();

if(@!$_SESSION['user']){
  echo("<script>location.href = './account/login.php';</script>");
} 
/* Integracion de metodo de pago Conekta */
/* require_once("/conekta-pay/lib//Conekta.php"); */
require_once("./conekta-pay/lib/Conekta.php");
include('./admin/get-keys.php');

/* ========================= Compra directa  ==============================*/
if($_SESSION['producto']){
  $id_user = $_SESSION['idu']; 
/* Consultas para mostrar en oxxo pay */
$product = $_SESSION['producto'];

$cookie_order = mysqli_query($link,"SELECT MAX(directo.id_compra), directo * FROM directo WHERE id ")
/* $cookie_order = mysqli_query($link,"SELECT * FROM productos WHERE id_producto = '$product'");
$cook = mysqli_fetch_array($cookie_order);

$usuario = mysqli_query($link,"SELECT * FROM usuarios WHERE id_usuario = '$id_user'");
$result = mysqli_fetch_array($usuario); */
/* Aqui termina */
try{
  $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();

  $order = \Conekta\Order::create(
    [
      "line_items" => [
        [
          "name" => "Pedido",
          "unit_price" => $cook['precio']*100,
          "quantity" => 1
        ]
        ],
        "shipping_lines" =>[
          [
            "amount" => 0,
            "carrier" => "FEDEX"
          ]
          ],
        "currency" => "MXN",
        "customer_info" =>[
          "name" => $result['usuario'],
          "phone" => "2212054136",
          "email" => $result['correo']
        ],
        "charges" =>[
          [
            "payment_method" => [
              "type" => "oxxo_cash",
              "expires_at" => $thirty_days_from_now
            ]
          ]
            ],
        "shipping_contact" => [
            "address"=> [
              "street1" => "250 address",
              "postal_code" => "98121",
              "country" => "MX"
            ]
            ]
      
    ]
          );
         /*  var_dump(json_decode($order)); */
}catch(\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
}catch(\Conekta\Handler $error){
  echo $error->getMessage();
}


}else{
/*===================================== Carrito de compras =================================================*/
$id_user = $_SESSION['idu']; 
/* Consultas para mostrar en oxxo pay */
$query = mysqli_query($link,"SELECT * FROM productos INNER JOIN carrito ON productos.id_producto = carrito.id_producto WHERE carrito.id_usuario = $id_user");
$sql = mysqli_fetch_array($query);    
            
$query2 = mysqli_query($link,"SELECT SUM(subtotal_cart) as mtotal FROM carrito WHERE id_usuario = $id_user");
$total = mysqli_fetch_array($query2);

$query3 = mysqli_query($link,"SELECT * FROM usuarios WHERE id_usuario = $id_user");
$res = mysqli_fetch_array($query3);

/* Aqui termina */
try{
  $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();

  $order = \Conekta\Order::create(
    [
      "line_items" => [
        [
          "name" => "Pedido",
          "unit_price" => $total['mtotal']*100,
          "quantity" => 1
        ]
        ],
        "shipping_lines" =>[
          [
            "amount" => 0,
            "carrier" => "FEDEX"
          ]
          ],
        "currency" => "MXN",
        "customer_info" =>[
          "name" => $res['usuario'],
          "phone" => "2212054136",
          "email" => $res['correo']
        ],
        "charges" =>[
          [
            "payment_method" => [
              "type" => "oxxo_cash",
              "expires_at" => $thirty_days_from_now
            ]
          ]
            ],
        "shipping_contact" => [
            "address"=> [
              "street1" => "250 address",
              "postal_code" => "98121",
              "country" => "MX"
            ]
            ]
      
    ]
          );
         /*  var_dump(json_decode($order)); */
}catch(\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
}catch(\Conekta\Handler $error){
  echo $error->getMessage();
}
/* Fin conekta */
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
		<link href="./opps_es_files/styles.css?v=2" media="all" rel="stylesheet" type="text/css">
		<link href="file:///Users/lizbethgamez/Downloads/oxxopay-payment-stub-master/demo/css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="css/estilos-payments.css?v=2">
    <link rel="stylesheet" href="index.css?v=2">
 <!--   <script src="https://sdk.mercadopago.com/js/v2"></script>
  -->
        
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
    <p class="indi">Guarda el número de referencia y finaliza el pago.</p>
    
    <!-- <p class="indi">Presiona el botón de confirmar una vez que guardés el número de referencia para que tu pago se haga válido y obtengamos tu información.</p>
     --><div class="confirmar">
      <button class="ok-btn" onclick="location.href='./helpers/add-oxxo-order.php'">Finalizar Pedido</button>  
    </div>   
    <div class="opps">
			<div class="opps-header">
				<div class="opps-reminder"> Fecha digital con limite de pago: 3 dias a partir de ahora</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="./opps_es_files/oxxopay_brand.png" alt="OXXOPay"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2>$ <?php echo $order->amount/100?> <sup>MXN</sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
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

    <script src="../js/mobileBtn.js"></script>
    <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
    </body>
</html>



    