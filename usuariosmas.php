<?php 
	include ('header.php');
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		include ('conexion.php');
		$resultado =  mysqli_query($connect,"SELECT * FROM cliente where ID='$id'");
		$row=mysqli_fetch_array($resultado);
	}
?>

			<!-- container -->
			<div class="container" style="background-image: url('img/fondo2.png')">
				<!-- row -->
				<div class="col-md-4"></div>
				<div class="registro col-md-4"><br><br>
					<?php if(isset($_GET['id'])){
						echo "<center><h2 class='text-uppercase'>Modificar usuario</h2></center>";
					}else{
						echo "<center><h2 class='text-uppercase'>Agregar usuario</h2></center>";
					}
					?>
						<form action="insertar.php" method="post">
							<br><input class="input" name="nom" id="nom" type="name" pattern="[A-Zz-a]" required placeholder="Nombre(s)" value="<?php if(isset($_GET['id'])) echo $row['Nombres']?>"> 
								<br>
							<br><input class="input" name="apepa" type="name" pattern="[A-Zz-a]" required placeholder="Apellido paterno" value="<?php if(isset($_GET['id'])) echo $row['Apepa']?>">
								<br>
							<br><input class="input" name="apema" type="name" pattern="[A-Zz-a]" required placeholder="Apellido materno" value="<?php if(isset($_GET['id'])) echo $row['Apema']?>">
								<br>
							<br><input class="input" name="usuario" type="name" pattern="[A-Zz-a]" required placeholder="Nombre de usuario" value="<?php if(isset($_GET['id'])) echo $row['Usuario']?>" <?php if(isset($_GET['id'])) echo 'readOnly'?> >
								<br>
							<br><input class="input" name="correo" type="email" required placeholder="Correo electrónico" value="<?php if(isset($_GET['id'])) echo $row['Email']?>">
								<br>
							<br><input class="input" name="tel" type="tel" pattern="[0-9]{10}" required placeholder="Teléfono (+LADA)" value="<?php if(isset($_GET['id'])) echo $row['Telefono']?>">
								<br>
							<br><input class="input" name="contra" <?php if(isset($_GET['id'])) echo "type='text'"?> type="password" pattern="[A-Za-z0-9]{8,15}" required placeholder="Contraseña (+8)" value="<?php if(isset($_GET['id'])) echo $row['Contra']?>" >
								<br>
								<?php if(isset($_GET['id'])){
								 echo "<input style='visibility: hidden;' name='opc' type='text' value='3'>";
								}else{
									echo "<input style='visibility: hidden;' name='opc' type='text' value='1'>";
								}
								?>
							
							<center>
								<br>
								<?php if(isset($_GET['id'])){
						echo "<input type='submit' id='registrobtn' value='Guardar cambios' class='primary-btn cta-btn'>";
					}else{
						echo "<input type='submit' id='registrobtn' value='Agregar' class='primary-btn cta-btn'>";
					}
					?>
							
						</center><br>
						</form>
						<center><a class="primary-btn cta-btn" href="usuarios.php">Cancelar</a></center>
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