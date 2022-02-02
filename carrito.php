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
						<li><a href="productos.php">Productos</a></li>
						<li class="active"><a href="carrito.php">Mi carrito</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="contacto.php">Contacto</a></li>
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
								<h3>Mis productos agregados</h3><br><br>

							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">

							<?php 
							include ('conexion.php');
							$user=$_SESSION['user'];
							$resultado2 =  mysqli_query($connect,"SELECT ID FROM cliente where Usuario='$user'");
							$row2=mysqli_fetch_array($resultado2);
							$resultado =  mysqli_query($connect,"SELECT * FROM productos_cliente,productos,cliente WHERE cliente.ID=productos_cliente.ID_Cliente and productos_cliente.ID_Producto=productos.ID and cliente.ID='$row2[0]'");
							
							while($rows=mysqli_fetch_array($resultado))
						      {
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="<?php echo $rows['Imagen'];?>" alt="">
										<div class="product-label" style="margin-left: 220px;">
											<input class="cantidad" name="num" type="text" value="<?php echo $rows['Cantidad'];?>" >
											<br>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $rows['Categoria'];?></p>
										<h3 class="product-name"><a href="#"><?php echo $rows['Nombre'];?></a></h3>
										<h4 class="product-price">$<?php echo $rows['Precio'];?></h4>
										<div class="product-rating">
										<?php 
										$num =$rows['Estrellas'];
										for ($i=0; $i < $num ; $i++) { 
											echo "<i class='fa fa-star'></i>";
											echo " ";
										}
										?>
											
										</div>
										
									</div>
									<div class="add-to-cart">
										<a href="quitar.php?id=<?php echo $rows['ID_pc'];?>&opc=1"><button class="add-to-cart-btn"><i class="fa fa-times"></i> Quitar del carrito</button></a>
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