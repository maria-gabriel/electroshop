<?php 
	include ('header.php');
?>

	<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<?php 
						if(isset($_SESSION['user'])){
							?> 
						<li><a href="bienvenido.php">Inicio</a></li>
						<li><a href="productos.php">Productos</a></li>
						<li><a href="carrito.php">Mi carrito</a></li>
						<?php }else{ ?>
						<li><a href="index.php">Inicio</a></li>
						<?php 
						}
						?>
						<li class="active"><a href="nosotros.php">Nosotros</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>E</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>L</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>E</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>C</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>T</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>R</h3>
										
									</div>
								</li>
								<li>
									<div>
										<h3>O</h3>
										
									</div>
								</li>
							</ul>
							<br>
							<h2 class="text-uppercase">¿Quienes somos?</h2>
							<br>
							<h5>Somos una tienda online de productos eletrónicos <br>que busca complacer a sus clientes con los mejores precios.</h5><br>
							<img src="img/nosotros.png" width="250" height="250" style="border-radius: 5%;"><br><br><br>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<div class="container">
			<h3 class="text-uppercase">► Visión</h3>
				<br>
				<p>❝Ser una de las mejores tiendas online de productos eletrónicos en Cuernavaca Mor.❞</p><br><br>
				<h3 class="text-uppercase">► Misión</h3>
				<br>
				<p>❝Somos una microempresa dedicada a la venta de productos electrónicos y deseamos hacer que nuestros clientes se sientan cómodos con el servicio que ofrecemos, de forma que nuestra atención esté puesta en la satisfacción mutua a largo palazo. Somos una empresa honesta y responsable; y con nuestra experiencia y compromiso queremos ganar la confianza de nuestros clientes y proveedores.❞</p><br>
				<h3 class="text-uppercase">► Valores</h3>
				<ul>
					<li>• Honestidad</li>
					<li>• Responsabilidad</li>
					<li>• Respeto</li>
					<li>• Igualdad</li>
				</ul><br><br>
		</div>

<?php 
	include ('footer.php');
?>