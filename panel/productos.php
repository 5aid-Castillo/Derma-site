<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$categoria = $_GET['cat'];
$id = $_GET['id'];

// Obtenemos todos los productos de la categoría deseada.
$stmt = $conexion->prepare('SELECT * FROM producto WHERE categoria = :id');
$stmt->execute(array(':id' => $id));
// Guardamos los productos en variable data
$data = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-productos.css">
    <title><? echo $categoria ?></title>
</head>
<body>
    <section class="contain">
        <div class="navbar">
            <a href="./index.html" class="black">P</a>
           <div class="navbar-links">
                <a href="productos.php?cat=Dermofarmacia&id=1" class="link-dermofarmacia">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M32 448c0 35.2 28.8 64 64 64h192c35.2 0 64-28.8 64-64V128H32V448zM96 304C96 295.2 103.2 288 112 288H160V240C160 231.2 167.2 224 176 224h32C216.8 224 224 231.2 224 240V288h48C280.8 288 288 295.2 288 304v32c0 8.799-7.199 16-16 16H224v48c0 8.799-7.199 16-16 16h-32C167.2 416 160 408.8 160 400V352H112C103.2 352 96 344.8 96 336V304zM360 0H24C10.75 0 0 10.75 0 24v48C0 85.25 10.75 96 24 96h336C373.3 96 384 85.25 384 72v-48C384 10.75 373.3 0 360 0z"/></svg>
                </a>
                <a href="productos.php?cat=Cosmeticos&id=2"  class="link-cosmeticos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M559.7 392.2l-135.1 99.51C406.9 504.8 385 512 362.1 512H15.1c-8.749 0-15.1-7.246-15.1-15.99l0-95.99c0-8.748 7.25-16.02 15.1-16.02l55.37 .0238l46.5-37.74c20.1-16.1 47.12-26.25 74.12-26.25h159.1c19.5 0 34.87 17.37 31.62 37.37c-2.625 15.75-17.37 26.62-33.37 26.62H271.1c-8.749 0-15.1 7.249-15.1 15.1s7.25 15.1 15.1 15.1h120.6l119.7-88.17c17.8-13.19 42.81-9.342 55.93 8.467C581.3 354.1 577.5 379.1 559.7 392.2z"/></svg>
                </a>
                <a href="productos.php?cat=Derivados&id=3"  class="link-deriv-naturales">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/></svg>
                </a>
                <a href="productos.php?cat=Promociones&id=4"  class="link-promociones">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>
                </a>
                <a href="productos.php?cat=Consulta&id=5"  class="link-consulta">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M544 0c-17.67 0-32 14.33-32 31.1V480C512 497.7 526.3 512 544 512s32-14.33 32-31.1V31.1C576 14.33 561.7 0 544 0zM160 288C142.3 288 128 302.3 128 319.1v160C128 497.7 142.3 512 160 512s32-14.33 32-31.1V319.1C192 302.3 177.7 288 160 288zM32 384C14.33 384 0 398.3 0 415.1v64C0 497.7 14.33 512 31.1 512S64 497.7 64 480V415.1C64 398.3 49.67 384 32 384zM416 96c-17.67 0-32 14.33-32 31.1V480C384 497.7 398.3 512 416 512s32-14.33 32-31.1V127.1C448 110.3 433.7 96 416 96zM288 192C270.3 192 256 206.3 256 223.1v256C256 497.7 270.3 512 288 512s32-14.33 32-31.1V223.1C320 206.3 305.7 192 288 192z"/></svg>
                </a>
                <a href="productos.php?cat=servicios&id=6"  class="link-servicios">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 32v128h128V32H0zm120 120H8V40h112v112zm40-120v128h128V32H160zm120 120H168V40h112v112zm40-120v128h128V32H320zm120 120H328V40h112v112zM0 192v128h128V192H0zm120 120H8V200h112v112zm40-120v128h128V192H160zm120 120H168V200h112v112zm40-120v128h128V192H320zm120 120H328V200h112v112zM0 352v128h128V352H0zm120 120H8V360h112v112zm40-120v128h128V352H160zm120 120H168V360h112v112zm40-120v128h128V352H320z"/></svg>
                </a>
            </div>
            <a href="#" class="arrow black">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
            </a>
        </div>
        <div class="wrapper-loading">
            <div class="msg-loading">
                <p class="p-message"> Cargando...</p>
            </div>      
        </div>
        <div class="main-panel">
            <div class="add-product">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>
            </div>
            <h2><? echo $categoria;   ?></h2>
            <div class="products">
                <?php  if (empty($data)) { ?>
                    <div class="empty-container">
                        <h2>No hay productos para esta categoría.</h2>
                    </div>
               <?php } ?>
                    <!-- Iteramos por cada uno de los productos para mostrar su información -->
                                <?php foreach ($data as $item) { ?>   
                            <div class="product" id="<?php echo $item['id']; ?>" data="<?php echo $item['descripcion']; ?>">
                                    <div class="etiqueta <?php echo $item['etiqueta']; ?>">
                                        <div class="triangle"></div>
                                        <p class="text"><?php echo $item['etiqueta']; ?></p>
                                    </div>
                                <div class="img-product">
                                    <img src="../api/Controllers/imgProducts/<?php echo $item['img']; ?>" alt="">
                                </div>
                                <div class="info-product">
                                    <div class="izq">
                                        <p class="title"><?php echo $item['nombre']; ?></p>
                                        <p class="price">$<?php echo $item['precio']; ?></p>
                                    </div>
                                    <div class="der">
                                        <div class="button green edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/></svg>
                                        </div>
                                        <div class="button orange delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }  ?>

        </div>
    </section>
    <div class="modal-wrap">
        <div class="modal">
            <h2 class="title-modal">Editar producto</h2>
                <form action="" class="form-editar" enctype="multipart/form-data">
                    <div class="form-izq">
                        <div class="inputWrap">
                            <label for="#">nombre</label>
                            <input type="text" class="edit-name" placeholder="X">
                        </div>
                        <div class="inputWrap">
                            <label for="#">descripcion</label>
                            <input type="text" class="edit-description" placeholder="X">
                        </div>
                        <div class="inputWrap">
                            <label for="#">precio</label>
                            <input type="text" class="edit-price" placeholder="X">
                        </div>
                    </div>
                    <div class="form-der">
                        <div class="inputWrap">
                            <label for="#">etiqueta</label>
                            <select id="edit-tag" name="etiqueta">
                                <option value="promocion...." selected>Promocion....</option>
                                <option value="promo">Promo</option>
                                <option value="nuevo">Nuevo</option>
                              </select>
                        </div>
                        <div class="inputWrap closed">
                            <label for="#">imagen</label>
                            <input type="file" id="fileEdit" change="0"  name="myfile">
                        </div>
                        <div class="inputWrap open">
                            <a href="#" id="changeImageProduct">Cambiar fotografía de producto.</a>
                        </div>
                        <div class="inputWrap notAppear">
                        <input type="text" id="prodId" hidden>
                        </div>
                        <div class="inputWrap">
                            <img src="img/1.png" class="edit-img" alt="">
                        </div>
                        <div class="inputWrap">
                            <input type="submit" class="btn-enviar" value="Enviar">
                        </div>
                    </div>
                </form>

                <form action="" class="form-nuevo" enctype="multipart/form-data">
                    <div class="form-izq">
                        <div class="inputWrap">
                            <label for="#">nombre</label>
                            <input type="text" class="nuevo-name" placeholder="Ingresa el nombre del producto:">
                        </div>
                        <div class="inputWrap">
                            <label for="#">descripcion</label>
                            <input type="text" class="nuevo-description" placeholder="Ingresa la descripción del producto:">
                        </div>
                        <div class="inputWrap">
                            <label for="#">precio</label>
                            <input type="text" class="nuevo-price" placeholder="Ingresa el precio del producto:">
                        </div>
                    </div>
                    <div class="form-der">
                        <div class="inputWrap">
                            <label for="#">etiqueta</label>
                            <select id="nuevo-tag" name="etiqueta">
                                <option value="Ninguna" selected>Ninguna</option>
                                <option value="promo">Promo</option>
                                <option value="nuevo">Nuevo</option>
                              </select>
                        </div>
                        <div class="inputWrap">
                            <label for="#">imagen</label>
                            <input type="file" class="nuevo-img" id="fileNew" name="fileNew">
                        </div>
                        <div class="inputWrap">
                            <input type="text" value="<?php echo $id; ?>" id="categoryId" hidden>
                        </div>
                        <div class="inputWrap">
                            <input type="submit" class="btn-enviar" value="Enviar">
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/api.js"></script>
    <script src="js/app.js"></script>
</body>
</html>