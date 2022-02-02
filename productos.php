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
						<li class="active"><a href="productos.php">Productos</a></li>
						<li><a href="carrito.php">Mi carrito</a></li>
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
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categorías</h3>
							<div class="checkbox-filter">
								<?php 
							include ('conexion.php');
							$resultado =  mysqli_query($connect,"SELECT count(*) FROM productos where Categoria='Laptops'");
							$row=mysqli_fetch_array($resultado);
						    $resultado2 =  mysqli_query($connect,"SELECT count(*) FROM productos where Categoria='Smartphones'");
							$row2=mysqli_fetch_array($resultado2);
							$resultado3 =  mysqli_query($connect,"SELECT count(*) FROM productos where Categoria='Tablets'");
							$row3=mysqli_fetch_array($resultado3);
							$resultado4 =  mysqli_query($connect,"SELECT count(*) FROM productos where Categoria='Accesorios'");
							$row4=mysqli_fetch_array($resultado4);

							?>
								<div class="input-checkbox">
										<span></span>
										Laptops
										<small>(<?php echo $row['0'];?>)</small>
									</label>
								</div>

								<div class="input-checkbox">
										<span></span>
										Smartphones
										<small>(<?php echo $row2['0'];?>)</small>
									</label>
								</div>

								<div class="input-checkbox">
										<span></span>
										Tablets
										<small>(<?php echo $row3['0'];?>)</small>
									</label>
								</div>

								<div class="input-checkbox">
										<span></span>
										Accesorios
										<small>(<?php echo $row4['0'];?>)</small>
									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->


					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<h3>Nuestros productos</h3><br><br>
								<label>
									Estrellas: 
									<select class="input-select">
										<option value="4">★★★★★</option>
										<option value="3">★★★★</option>
										<option value="2">★★★</option>
										<option value="1">★★</option>
										<option value="0">★</option>
									</select>
								</label>

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
										<div class="product-label" style="margin-left: 200px;">
											<form action="agregar.php" method="post">
											<input class="cantidad" name="num" type="number" value="1" >
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
										<input class="cantidad" name="id" type="number" value="<?php echo $row['ID'];?>" style="visibility: hidden; height: 0%;">
										<input class="cantidad" name="user" type="text" value="<?php echo $user; ?>" style="visibility: hidden; height: 0%;">
									</div>
									<div class="add-to-cart">
										<button type="submit" class="add-to-cart-btn">
										<i class="fa fa-shopping-cart"></i>Añadir a carrito</button>
									</form>
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

<?php 
	include ('footer.php');
?>