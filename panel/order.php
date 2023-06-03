<!DOCTYPE html>
<?php 
session_start();
include('../db/connect_db.php');
if(@!$_SESSION['admin']){
    echo("<script>location.href = '../index.php';</script>");
}
$user=$_GET['id'];
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

	<title>Pedidos -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-sun'></i>
			<span class="text">U</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li class="active">
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
			<li>
				<a href="./productos.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Mis Productos</span>
				</a>
			</li>
			<li>
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
			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Detalles</h3>
					</div>
					<?php 
					$sql = mysqli_query($link,"SELECT * FROM usuarios WHERE id_usuario =$user");
					$res = mysqli_fetch_array($sql);
					?>
                    <p><strong>Pedido de:</strong> <?php echo $res['usuario'];?></p> 
					<div class="btn-choose-send">
				
						<button class="btn-show" onclick="location.href='./order-shipment.php?id=<?php echo $user?>'">Ver detalles de envio</button>
					</div>
                    
					<style>
						.btn-show{padding:1rem;margin:1rem 0.5rem;font-weight:bold; background: #0275d8;color:white; border:none;border-radius:0.7rem;cursor:pointer}
					</style>
					<br>

					<table>
						<thead>
							<tr>
								<th>Producto</th>
								<th>Cantidad</th>
								<!-- <th>Pago</th>
                                <th>Fecha</th> -->
                                <th>Estatus</th>
                                <th>Detalles</th>

								
							</tr>
						</thead>
						<tbody>
							<?php 
							 	$query = mysqli_query($link, "SELECT * FROM  usuarios 
								INNER JOIN pedido 
								ON usuarios.id_usuario = pedido.id_usuario 
								INNER JOIN productos 
								ON pedido.id_producto = productos.id_producto");
									
									while($row = mysqli_fetch_array($query)){
                                    
                            ?>
							
							<tr>
								<td>
									<p><?php echo $row['producto']?></p>
								</td>
								
								<td>
									<p><?php echo $row['cantidad']?></p>
								</td>
								
								<?php 
								$link = './change-order.php?id_order='.$row['id_pedido'].'';
								
									switch($row['status']){
										case 'Entregado': echo "<td><a href='".$link."'><span class='status entregado'>".$row['status']." </span></a></td>";
										break;
										case 'Enviado':echo "<td><a href='".$link."'<span class='status proceso'> ".$row['status']."</span></a></td>";
										break;
										case 'Pendiente':echo "<td><a href='".$link."'<span class='status pendiente'> ".$row['status']."</span></a></td>";
										break;
										default:
										echo "<td><span class='status completed'>Ninguno</span></td>";
									}
								?>

							

								<td><span class="status completed"><a style="color:white" href="./order-details.php?id_pedido=<?php echo $row['id_pedido']?>"> Detalles</a></span></td>
							</tr>
									
								 <?php  } ?>
							
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>