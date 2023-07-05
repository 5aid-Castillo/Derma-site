<?php 

if(@!$_SESSION['user']){
    echo("<script>location.href = './account/login.php';</script>");
  } 
  /* Integracion de metodo de pago Conekta */
  /* require_once("/conekta-pay/lib//Conekta.php"); */
  require_once("./conekta-pay/lib/Conekta.php");
  include('./admin/get-keys.php');
  
  /* ========================= Compra directa  ==============================*/ 
  $id_producto = $_GET['id_producto'];
  $id_user = $_SESSION['idu']; 
  /* Consultas para mostrar en oxxo pay */
  
  $query = mysqli_query($link,"SELECT * FROM directo INNER JOIN usuarios ON directo.id_usuario = usuarios.id_usuario WHERE usuarios.id_usuario = $id_user");
  $res = mysqli_fetch_array($query);
  
  $query2 = mysqli_query($link,"SELECT * FROM directo WHERE id_usuario = '$id_user' ORDER BY id_compra DESC LIMIT 1 ");
  $res2 = mysqli_fetch_array($query2);
  
  $query3 = mysqli_query($link,"SELECT * FROM datos WHERE id_usuario = $id_user ORDER BY id_dato DESC LIMIT 1");
  $res3 = mysqli_fetch_array($query3);
  
  
  
  /* Aqui termina */
  try{
    $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();
  
    $order = \Conekta\Order::create(
      [
        "line_items" => [
          [
            "name" => "Pedido",
            "unit_price" => $res2['tot']*100,
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
            "phone" => $res3['telefono'],
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
                "street1" => $res3['calle'],
                "postal_code" => $res3['cp'],
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
  
?>