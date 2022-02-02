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
						<li><a href="nosotros.php">Nosotros</a></li>
						<li class="active"><a href="contacto.php">Contacto</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal2" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<h2 class="text-uppercase">Visitanos!</h2>
					
					<div class="col-md-6">
						<br><br>
							<iframe style="border: 2px solid red; border-radius: 5px;" width="1150" height="500" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Plaza%20Galer%C3%ADas%20Cuernavaca%20Morelos+(Ubicaci%C3%B3n)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<br><br><h4>Horario:<br>
										Lunes - Sábado: 8:00 am - 9:00 pm</h4>
						</div>
							<div class="col-md-2">
								
							</div>
								<div class=" col-md-4 ">
									<br><br><br>
									<p class="horarios">Puedes visitar nuestras instalaciones<br> en plaza galerías.Nos encontramos <br>en la primer planta en el local 4349.</p><br>
									<br><img style="box-shadow: 10px 10px 5px grey;" src="img/galerias.jpg" width="300" height="190">
									<br><br>
									
					
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

<?php 
	include ('footer.php');
?>
