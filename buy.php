<!DOCTYPE html>
<?php

/* Integracion de metodo de pago Conekta */
require_once("/conekta-pay/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_huJzkw1HCpeEJyyTqUuVIIK");
\Conekta\Conekta::setApiVersion("2.0.0");

try{
  $customer = \Conekta\Customer::create(
    array(
        'name'  => "fulanito",
        'email' => "fulanito@test.com",
        'phone' => "+5218181818181",
        'payment_sources' => array(
              array(
              'type' => "oxxo_recurrent"
              )
          )
    )
  );
  var_dump(json_encode($customer));
} catch (\Conekta\ProcessingError $error){
  echo $error->getMessage();
} catch (\Conekta\ParameterValidationError $error){
  echo $error->getMessage();
} catch (\Conekta\Handler $error){
  echo $error->getMessage();
}
/* Fin conekta */
/* include ('./mercado.php'); */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <script src="https://sdk.mercadopago.com/js/v2"></script> -->
   <link rel="stylesheet" href="css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
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
              <a href="galeria.html" class="nav-menu-link nav-link-ss">Galería</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="../index.php#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../redes.html" class="nav-menu-link-ss nav-link-ss"
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
    

    <section class="payments">
        <h2>Selecciona el metodo de pago</h2>
        
        <div class="buttons-payments">
            <button class="button-oxxo">Pagar en efectivo</button>
            
          </div>
<!-- 
        <form action="" method="POST">
                <div id="wallet_container"></div>
                <script src="https://sdk.mercadopago.com/js/v2"></script>
                <script>
                    const mp = new MercadoPago('TEST-e87cdded-dfb5-4e64-9f7b-d56a5f1bcf8f');
                    const bricksBuilder = mp.bricks();
                    mp.bricks().create("wallet", "wallet_container", {
                        initialization: {
                            preferenceId: "<PREFERENCE_ID>",
                        },
                    });

            </script> -->
        
      <!-- <script src="http://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id=<?php echo $preference ->id;?>>
       -->   <!-- 
    </form>
 -->
        

    </section>

<!-- =============================== -->











    <script>
        Conekta.setPublicKey("");
        
    </script>
    <script src="../js/mobileBtn.js"></script>
      
    <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
      

    </body>
</html>



    