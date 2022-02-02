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
					<center><h2 class="text-uppercase">Inicio de sesión</h2></center>
						<form action="login.php" method="post">
							<br><br><input class="input" name="usuario" type="name" pattern="[A-Zz-a]" required placeholder="Nombre de usuario">
								<br>
							<br><input class="input" name="contra" type="password" pattern="[A-Za-z0-9]{8,15}" required placeholder="Contraseña">
								<br>
							<center>
								<br><br>
							<input type="submit" id="registrobtn" onclick="verificar();" value="Ingresar" class="primary-btn cta-btn">
						</center><br>
						</form>
						<center><a class="primary-btn cta-btn" href="index.php">Cancelar</a>
							<br><br><br><br><a href="registro.php" style="text-decoration: underline; font-size: 16px;">Registrarse</a></center>
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