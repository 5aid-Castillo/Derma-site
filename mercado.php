<?php 

require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-891225526895675-071220-d83f1e1acf91ca0c3709abedb62fd66e-789165060'); 
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();

?>