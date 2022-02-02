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
						<li class="active"><a href="usuarios.php">Administrar usuarios</a></li>
						<li><a href="productos2.php">Administrar productos</a></li>
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
						<div class="store-filter clearfix">
							<div class="store-filter clearfix">
								<div class="store-sort">
									<h3>Crud de usuarios</h3><br><br>
									<a href="usuariosmas.php"><button class="primary-btn cta-btn"><li class="fa fa-plus"></li> Usuarios</button></a>

								</div>
								
							</div>

						<!-- store products -->
						<div class="row">

							<?php 
							include ('conexion.php');
							$user=$_SESSION['user'];
							$resultado =  mysqli_query($connect,"SELECT * FROM cliente");
							
							while($row=mysqli_fetch_array($resultado))
						      {
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="img/user.png" alt="">
										<div class="product-label" style="margin-left: 240px;">
											<input class="cantidad" name="num" type="text" value="<?php echo " ".$row['ID'];?>" >
											<br>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $row['Email'];?></p>
										<h3 class="product-name"><a href="#"><?php echo $row['Nombres']." ".$row['Apepa']." ".$row['Apema'];?></a></h3>
										<h4 class="product-price"><?php echo $row['Telefono'];?></h4>
										<div class="product-rating"><br>
										<?php echo $row['Usuario'];?><br>
										<?php echo $row['Contra'];?>
										</div>
										<input class="cantidad" name="id" type="number" value="<?php echo $row['ID'];?>" style="visibility: hidden; height: 0%;">
										<input class="cantidad" name="user" type="text" value="<?php echo $user; ?>" style="visibility: hidden; height: 0%;">
									</div>
									<div class="add-to-cart">
										<a href="usuariosmas.php?id=<?php echo $row['ID'];?>"><button class="primary-btn cta-btn">Editar</button></a><br><br>
										<a href="quitar.php?id=<?php echo $row['ID'];?>&opc=2"><button class="primary-btn cta-btn">Eliminar</button></a>
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