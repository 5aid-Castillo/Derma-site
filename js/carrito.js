function proceso(contador){
     var parametros = {
             "contador" : contador,
             
     };
     $.ajax({
             data:  parametros, //datos que se envian a traves de ajax
             url:   './helpers/add-cart.php', //archivo que recibe la peticion
             type:  'post', //método de envio
             beforeSend: function () {
                     $("#resultado").html("Procesando, espere por favor...");
             },
             success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                     $("#resultado").html("Tu comentario ha sido enviado...");
             }
     });
 }