<?php 
/* Integracion de metodo de pago Conekta */
/* require_once("/conekta-pay/lib//Conekta.php"); */
require_once("./conekta-pay/lib/Conekta.php");
include('./admin/get-keys.php');

/* ========================= Compra directa  ==============================*/ 

$id_user = $_SESSION['idu']; 
/* Consultas para mostrar en oxxo pay */

$query = mysqli_query($link,"SELECT * FROM usuarios WHERE id_usuario = $id_user");
$res = mysqli_fetch_array($query);

$query2 = mysqli_query($link,"SELECT * FROM consulta WHERE id_usuario = $id_user ORDER BY id_consulta DESC LIMIT 1");
$res2 = mysqli_fetch_array($query2);
/* Aqui termina */
try{
  $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();

  $order = \Conekta\Order::create(
    [
      "line_items" => [
        [
          "name" => "Consulta",
          "unit_price" => 700*100,
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
          "phone" => $res2['telefono'],
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
              "street1" => '250 address',
              "postal_code" => '98121',
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