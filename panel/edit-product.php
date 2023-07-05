<!DOCTYPE html>
<?php 
include('../db/connect_db.php');
session_start();
if(@!$_SESSION['admin']){
    echo("<script>location.href = '../index.php';</script>");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../assets/logo.png"/>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Productos -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">U</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li>
				<a href="./pedidos.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
			<li>
				<a href="./consultas.php">
					<i class='bx bxs-user-voice' ></i>
					<span class="text">Consultas</span>
				</a>
			</li>
			<li class="active">
				<a href="./productos.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Mis Productos</span>
				</a>
			</li>
			
			<li >
				<a href="./message.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Mensajes</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="../admin/exit.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Salir</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			<a href="./admin.php" class="profile">
				<img src="../assets/administrador.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Detalles de producto</h1>
					
				</div>
				
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Detalles</h3>
						
					</div>

					<div class="detalles">
                        <style>.detalles{display:flex;align-items:center;justify-content:center; flex-direction:column}</style>
                        <?php 
                        if(isset($_GET['id_producto'])){
                            $producto=$_GET['id_producto'];
                            
                            $query = mysqli_query($link,"SELECT * FROM productos WHERE id_producto = $producto");
                            $row = mysqli_fetch_array($query);
                            ?>

                       <form action="./edit-producto-action.php?id_producto=<?php echo $producto?>" method="POST" class="datos-productos"> 
                         
                         <div class="edit-cont">
                         <label for="producto">Producto:</label><br>
                         <input type="text" name="producto" id="producto" value="<?php echo $row['producto']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="descripcion">Descripción:</label><br>
                        <!--  <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']?>">      
                         -->
						 <textarea name="descripcion" id="descripcion" style="resize:none" cols="30" rows="10"><?php echo $row['descripcion']?></textarea> 
						</div>

                         <div class="edit-cont">
                         <label for="resumen">Resumen:</label><br>
                         <input type="text" name="resumen" id="resumen" value="<?php echo $row['resumen']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="precio">Precio:</label><br>
                         <input type="text" name="precio" id="precio" value="<?php echo $row['precio']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="promocion">Promoción:</label><br>
                         <input type="text" name="promocion" id="promocion" value="<?php echo $row['promocion']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="porcion">Cantidad:</label><br>
                         <input type="text" name="porcion" id="porcion" value="<?php echo $row['porcion']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="tipo">Tipo:</label><br>
                         <input type="text" name="tipo" id="tipo" value="<?php echo $row['tipo']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="recomendaciones">Recomendaciones:</label><br>
                         <input type="text" name="recomendaciones" id="recomendaciones" value="<?php echo $row['recomendaciones']?>">      
                         </div>
						
						 <div class="edit-cont">
						 <label for="categoria">Categoria:</label><br>
                         <select name="categoria" id="categoria">
                            <option value="<?php echo $row['categoria']?>"><?php echo $row['categoria']?></option>
                            <option value="Facial">Facial</option>
                            <option value="Corporal">Corporal</option>
                            <option value="Nutracéuticos">Nutracéuticos</option>
                            <option value="Cabello">Cabello</option>
                            <option value="Cabello">Boutique</option>
                            <option value="Ninguni">Ninguno</option>
                         </select>
						</div>

                         <div class="edit-cont">
                         <small>Añadir maximo 9:</small><br>
                         <label for="stock">Inventario</label><br>
                         <input type="text" name="stock" id="stock" value="<?php echo $row['stock']?>">
                         </div>
                         
                          <input type="hidden" name="id" value="">
                         <div class="edit-cont">
                         <input  class="btn-editar" type="submit" value="Editar"> 
                         </div>
                        <style>
                            .datos-productos{
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                flex-direction:column;
                            }
                            .edit-cont{
                                margin-top:1rem;
                            }
                            input,textarea{
                                 
                                padding:1rem;
                                border-radius:0.8rem;
                            }
							
                            .btn-editar{
                                background:#14A44D;
                                border:none;
                                font-weigth:bold;
                            }
                            
                        </style>
                        </form>
                        
                        <?php     
                        }
                        ?>
                    </div>
					
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
   
</body>
</html>