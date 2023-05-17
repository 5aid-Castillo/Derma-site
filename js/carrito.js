function proceso(contador){
     var parametros = {
             "contador" : contador,
             
     };
     $.ajax({
             data:  parametros, 
             url:   './helpers/add-cart.php',
             type:  'post', 
             beforeSend: function () {
                     $("#resultado").html("Procesando, espere por favor...");
             },
             success:  function (response) { 
                     $("#resultado").html("Datos enviados correctamente...");
             }
     });
 }