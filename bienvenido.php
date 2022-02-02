<?php 
	include ('header.php');
	if(isset($_GET['user'])){
		$_SESSION['user'] = $_GET['user'];
		 echo '<script>
    		document.location.replace("bienvenido.php");
    		</script>';
	}
	$user=$_SESSION['user'];
?>

	<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="bienvenido.php">Inicio</a></li>
						<?php
						if($user=="Admin19980322"){
							?>
						
						<li><a href="usuarios.php">Administrar usuarios</a></li>
						<li><a href="productos2.php">Administrar productos</a></li>
						<?php
						}else{	
						?>
						<li><a href="productos.php">Productos</a></li>
						<li><a href="carrito.php">Mi carrito</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<?php
						}	
						?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<div class="section">
			<div class="container">
				<center><img src="img/icono.png" width="380" height="100"></center>
				<div class="row">
					<?php
						include ('conexion.php');
						if($user=="Admin19980322"){
							?>
						<div class="col-md-3"></div>
						<div class="col-md-2">
							
							<img src="img/user.png" width="200">
						</div>
						<div class="col-md-5">
							<br><br><br>
							<h3 style="color: #D10024;">Administrador</h3>
							</div>
							<?php
						}else{
						$resultado =  mysqli_query($connect,"SELECT * FROM cliente where Usuario='$user'");
						$row=mysqli_fetch_array($resultado);
						?>
						<div class="col-md-3"></div>
						<div class="col-md-2">
							
							<img src="img/user.png" width="200">
						</div>
						<div class="col-md-5">
							<br>
							<h3 style="color: #D10024;"><?php echo $row['Nombres']." ".$row['Apepa']." ".$row['Apema'];?></h3>
							<h5 style="color: #D10024;">Correo eletrónico: </h5>
							<h4><?php echo $row['Email'];?></h4>
							<h5 style="color: #D10024;">Teléfono: </h5>
							<h4><?php echo $row['Telefono'];?></h4>
						</div>
						<?php 
						}
						?>
				</div>
			</div>
		</div>

		<?php
		if($user=="Admin19980322"){
		?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/icono1.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Usuarios<br></h3>
								<a href="usuarios.php" class="cta-btn">Administrar! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/icono3.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Productos<br></h3>
								<a href="productos2.php" class="cta-btn">Administrar! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php
		}else{
		?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/icono1.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Mi carrito<br></h3>
								<a href="carrito.php" class="cta-btn">Ver ahora! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/icono3.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Productos<br></h3>
								<a href="productos.php" class="cta-btn">Ver ahora! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php
		}
		?>
		
		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

<?php 
	include ('footer.php');
?>