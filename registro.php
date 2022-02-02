<?php 
	include ('header.php');
	if (isset($_POST['correo'])) {
		$Correo=$_POST['correo'];
	}
	
?>

			<!-- container -->
			<div class="container" style="background-image: url('img/fondo2.png')">
				<!-- row -->
				<div class="col-md-4"></div>
				<div class="registro col-md-4"><br><br>
					<center><h2 class="text-uppercase">Registro</h2></center>
						<form action="insertar.php" method="post">
							<br><input class="input" name="nom" id="nom" type="name" pattern="[A-Zz-a]" required placeholder="Nombre(s)"> 
								<br>
							<br><input class="input" name="apepa" type="name" pattern="[A-Zz-a]" required placeholder="Apellido paterno">
								<br>
							<br><input class="input" name="apema" type="name" pattern="[A-Zz-a]" required placeholder="Apellido materno">
								<br>
							<br><input class="input" name="usuario" type="name" pattern="[A-Zz-a]" required placeholder="Nombre de usuario">
								<br>
							<br><input class="input" name="correo" type="email" value="<?php if (isset($_POST['correo'])) echo $Correo ?>" required placeholder="Correo electrónico">
								<br>
							<br><input class="input" name="tel" type="tel" pattern="[0-9]{10}" required placeholder="Teléfono (+LADA)">
								<br>
							<br><input class="input" name="contra" type="password" pattern="[A-Za-z0-9]{8,15}" required placeholder="Contraseña (+8)">
								<br>
							<center>
								<br>
							<input type="submit" id="registrobtn" onclick="verificar();" value="Registrarme" class="primary-btn cta-btn">
						</center><br>
						</form>
						<center><a class="primary-btn cta-btn" href="index.php">Cancelar</a></center>
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