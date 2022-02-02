<?php 
	include ('header.php');
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		include ('conexion.php');
		$resultado =  mysqli_query($connect,"SELECT * FROM productos where ID='$id'");
		$row=mysqli_fetch_array($resultado);
	}
?>

			<!-- container -->
			<div class="container" style="background-image: url('img/fondo2.png')">
				<!-- row -->
				<div class="col-md-4"></div>
				<div class="registro col-md-4"><br><br>
					<?php if(isset($_GET['id'])){
						echo "<center><h2 class='text-uppercase'>Modificar producto</h2></center>";
					}else{
						echo "<center><h2 class='text-uppercase'>Agregar producto</h2></center>";
					}
					?>
						<form action="insertar.php" method="post">
							<br><input class="input" name="nom" id="nom" type="name" pattern="[A-Zz-a]" required placeholder="Nombre" value="<?php if(isset($_GET['id'])) echo $row['Nombre']?>"> 
								<br>
							<br><input class="input" name="apepa" type="name" required placeholder="Descripción" value="<?php if(isset($_GET['id'])) echo $row['Descripcion']?>">
								<br>
							<br><input class="input" name="apema" type="name" pattern="[A-Zz-a]" required placeholder="Categoría" value="<?php if(isset($_GET['id'])) echo $row['Categoria']?>">
								<br>
							<br><input class="input" name="usuario" type="name" required placeholder="Precio" value="<?php if(isset($_GET['id'])) echo $row['Precio']?>">
								<br>
							<br><input class="input" name="correo" type="text" required placeholder="Imagen" value="<?php if(isset($_GET['id'])) echo $row['Imagen']?>">
								<br>
							<br><input class="input" name="tel" type="number"  required placeholder="Estrellas" value="<?php if(isset($_GET['id'])) echo $row['Estrellas']?>">
							<br><input style="visibility: hidden;" class="input" name="contra" type="password" value="<?php if(isset($_GET['id'])) echo $row['ID']?>">
							<?php if(isset($_GET['id'])){
								 echo "<input style='visibility: hidden;' name='opc' type='text' value='4'>";
								}else{
									echo "<input style='visibility: hidden;' name='opc' type='text' value='2'>";
								}
								?>
							<center>
							<?php if(isset($_GET['id'])){
						echo "<input type='submit' id='registrobtn' value='Guardar cambios' class='primary-btn cta-btn'>";
					}else{
						echo "<input type='submit' id='registrobtn' value='Agregar' class='primary-btn cta-btn'>";
					}
					?>
						</center><br>
						</form>
						<center><a class="primary-btn cta-btn" href="productos2.php">Cancelar</a></center>
						<br>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

		<footer id="footer">
		<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Está página es creada por Electro.
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<!--<script src="js/bootstrap.min.js"></script>-->
		<script src="js/slick.min.js"></script>
		<!--<script src="js/nouislider.min.js"></script>-->
		<!--<script src="js/jquery.zoom.min.js"></script>-->
		<script src="js/main.js"></script>

	</body>
</html>