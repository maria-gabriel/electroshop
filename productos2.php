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
						<li><a href="bienvenido.php">Inicio</a></li>
						<li><a href="usuarios.php">Administrar usuarios</a></li>
						<li class="active"><a href="productos2.php">Administrar productos</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- STORE -->
					<div id="store" class="col-md-10">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<h3>Crud de productos</h3><br><br>
								<a href="productosmas.php"><button class="primary-btn cta-btn"><li class="fa fa-plus"></li> Productos</button></a>

							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">

							<?php 
							include ('conexion.php');
							$user=$_SESSION['user'];
							$resultado =  mysqli_query($connect,"SELECT * FROM productos");
							
							while($row=mysqli_fetch_array($resultado))
						      {
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="<?php echo $row['Imagen'];?>" alt="">
										<div class="product-label" style="margin-left: 240px;">
											<input class="cantidad" name="num" type="text" value="<?php echo " ".$row['ID'];?>" >
											<br>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $row['Categoria'];?></p>
										<h3 class="product-name"><a href="#"><?php echo $row['Nombre'];?></a></h3>
										<h4 class="product-price">$<?php echo $row['Precio'];?></h4>
										<div class="product-rating">
										<?php 
										$num =$row['Estrellas'];
										for ($i=0; $i < $num ; $i++) { 
											echo "<i class='fa fa-star'></i>";
											echo " ";
										}
										?>
											
										</div>
									</div>
									<div class="add-to-cart">
										<a href="productosmas.php?id=<?php echo $row['ID'];?>"><button class="primary-btn cta-btn">Editar</button></a><br><br>
										<a href="quitar.php?id=<?php echo $row['ID'];?>&opc=3"><button class="primary-btn cta-btn">Eliminar</button></a>
									</div>
								</div>
							</div>
							<?php
							}

							?>	 
							<!-- /product -->
							
						</div>
						<!-- /store products -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<br><br><br><br>
<?php 
	include ('footer.php');
?>