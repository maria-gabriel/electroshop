<?php 
include ('conexion.php');

$Usuario=$_POST['usuario'];
$Contra=$_POST['contra'];

	if ($Usuario == "Admin19980322" && $Contra=="Admin19980322") {
		echo "<script>
					window.alert('¡Bienvenido Admin19980322!');
			        window.location= 'bienvenido.php?user=Admin19980322'
			    </script>";
	}

	$resultado =  mysqli_query($connect,"SELECT * FROM cliente WHERE Usuario='$Usuario' AND Contra='$Contra'");
	$row=mysqli_fetch_array($resultado);
	if($row>0){
		echo "<script>
					window.alert('¡Bienvenido!');
			        window.location= 'bienvenido.php?user=".$Usuario."'
			    </script>";
	}else{
	$resultado =  mysqli_query($connect,"SELECT * FROM cliente WHERE Usuario='$Usuario'");
	$row=mysqli_fetch_array($resultado);
	if($row>0){
		echo "<script>
			         window.alert('Verifique que su contraseña sea correcta.');
			         window.location= 'iniciar.php'
			    </script>";
			}else{
				echo "<script>
			         window.alert('Usuario no registrado (Verifique que sus datos sean correctos).');
			         window.location= 'iniciar.php'
			    </script>";
			}
	}

?>