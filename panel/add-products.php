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

	<title>Agregar Productos</title>
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
					<h1>Mis productos</h1>
					
				</div>
				 
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de productos</h3>
						
					</div>

					
                    <form class="add-products" method="POST" action="../admin/add-product.php" enctype="multipart/form-data">
                        
						<div class="cont-prod">
                        <label for="uploaded">Imagen:</label>
                        <input name="archivo" id="archivo" type="file" />
                        </div>

						<div class="cont-prod">
                        <label for="producto">Producto:</label>
                        <input type="text" name="producto" >
                        </div>

						<div class="cont-prod">
						<label for="descripcion">Descripción:</label>
                        <input type="text" name="descripcion">
                        </div>

						<div class="cont-prod">
						<label for="resumen">Resumen:</label>
                        <input type="text" name="resumen">
                        </div>

						<div class="cont-prod">
						<label for="precio">Precio</label>
                        <input type="text" name="precio">
                        </div>

						<div class="cont-prod">
						<label for="categoria">Categoria:</label>
                         <select name="categoria" id="categoria">
							<option value="Ninguno">Ninguno</option>
                            <option value="Facial">Facial</option>
                            <option value="Corporal">Corporal</option>
                            <option value="Nutracéuticos">Nutracéuticos</option>
                            <option value="Cabello">Cabello</option>
                         </select> 
						 </div>

						 <div class="cont-prod">
						<label for="promocion">Promoción:</label>
                        <input type="text" name="promocion">
                        </div>

						<div class="cont-prod">
						<label for="porcion">Cantidad:</label>
                        <input type="text" name="porcion">
						</div>

						<div class="cont-prod">
                        <label for="tipo">Tipo</label>
                        <input type="text" name="tipo">
                        </div>

						<div class="cont-prod">
						<label for="recomendaciones">Recomendaciones:</label>
                        <input type="text" name="recomendaciones">
                        </div>

						<div class="cont-prod">
						<small>Añadir maximo 9:</small><br>
						<label for="stock">Inventario:</label>
                        <input type="text" name="stock">
						</div>


						<input type="submit" class="btn-prod add" name="subir" value="Agregar">
						
						<style>
							
							.add-products,.cont-prod{
								display:flex;
								align-items:center;
								justify-content:center;
								flex-direction:column;
							}
							.add-products *{
								margin-top:1.2rem;
							}
							input{
								padding:0.8rem;
								border-radius:0.7rem
							}
							.btn-prod{
								margin-top:2rem;
								padding:0.7rem;
								border-radius:0.7rem;
								border:none;
								cursor: pointer;
							}
							.add{
								background:#14A44D;
								color:white;
							}
							.ret{
								background:#3B71CA;
								color:white;
							}
						</style>


						</form>
						<div style="display:flex;align-items:center;justify-content:center;">
						<button onclick="location.href='./productos.php'" class="btn-prod ret">Regresar</button>
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