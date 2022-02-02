<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Electro Shop</title>

		<!-- Google font - icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><p class="parrafo"><i class="fa fa-phone"></i>55 2450 5955</p></li>
						<li><p class="parrafo"><i class="fa fa-envelope"></i>mariz.magr@gmail.com</p></li>
						<li><p class="parrafo"><i class="fa fa-map-marker"></i>Cuernavaca Mor.</a></li>
					</ul>
					<?php 
						if(isset($_SESSION['user'])){
							?> 
					<ul class="header-links pull-right">
						<li><i class="fa fa-arrow-circle-right" style="font-size: 17px;"></i><a href="salir.php" style="font-size: 17px;"> Cerrar sesión</a></li>
					</ul>
							<?php
						}else{
					?>
					<ul class="header-links pull-right">
						<li><i class="fa fa-arrow-circle-right" style="font-size: 17px;"></i><a href="iniciar.php" style="font-size: 17px;"> Iniciar sesión</a></li>
					</ul>
				<?php } ?>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<?php 
						if(isset($_SESSION['user']) && $_SESSION['user']!="Admin19980322"){
							?> 
						<div class="col-md-6">
							<div class="header-search" style="margin-left: 140px;">
								<form action="mostrar.php" method="post">
									<select class="input-select" name="opc">
										<option value="cat"> C a t e g o r í a s </option>
										<option value="lap"> Laptops</option>
										<option value="cel"> Smartphones</option>
										<option value="tab"> Tablets</option>
										<option value="acc"> Accesorios</option>
									</select>
									
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Wishlist -->
								
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="carrito.php">
										<?php
										include ('conexion.php');
										$resultado2 =  mysqli_query($connect,"SELECT ID FROM cliente where Usuario='$user'");
										$row2=mysqli_fetch_array($resultado2);
										$resultado =  mysqli_query($connect,"SELECT count(*) FROM productos_cliente,productos,cliente WHERE cliente.ID=productos_cliente.ID_Cliente and productos_cliente.ID_Producto=productos.ID and cliente.ID='$row2[0]'");
										$row=mysqli_fetch_array($resultado);
										?>
										<i class="fa fa-shopping-cart"></i>
										<span><h6 style='color: #FFFFFF; font-size: 15px;'>Mi carrito</h6></span>
										<div class="qty"><?php echo $row[0];?></div>
									</a>
								</div>
								
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span><?php
										include('conexion.php');
										$user=$_SESSION['user'];
										
											echo "<h6 style='color: #FFFFFF; font-size: 14px;'>".$user."</h6>";
										 ?></span>
										
									</a>
								</div>
								
								<!-- /Wishlist -->
							</div>
						</div>
						<?php
							}
						?>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
