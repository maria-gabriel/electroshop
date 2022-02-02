<?php 
include ('conexion.php');

$Nombre=$_POST['nom'];
$ApellidoP=$_POST['apepa'];
$ApellidoM=$_POST['apema'];
$Usuario=$_POST['usuario'];
$Correo=$_POST['correo'];
$Telefono=$_POST['tel'];
$Contra=$_POST['contra'];

	if(isset($_POST['opc'])){
		$opc=$_POST['opc'];
		if($opc==1){
		$resultado =  mysqli_query($connect,"SELECT * FROM cliente WHERE Usuario='$Usuario'");
		$row=mysqli_fetch_array($resultado);
		if($row>0){
			echo "<script>
				         window.alert('Favor de ingresar un nombre de usuario diferente.');
				         window.location= 'usuariosmas.php'
				    </script>";
		}else{
			mysqli_query($connect,"INSERT INTO cliente(Nombres, Apepa, Apema, Usuario, Email, Telefono, Contra) VALUES ( '$Nombre','$ApellidoP','$ApellidoM','$Usuario','$Correo','$Telefono','$Contra')");

			echo "<script>
				         window.alert('El usuario ha sido agregado.');
				         window.location= 'usuarios.php'
				    </script>";
			}
		}else{
			if($opc==2){
				mysqli_query($connect,"INSERT INTO productos(Nombre, Descripcion, Categoria, Precio, Estrellas, Imagen) VALUES ('$Nombre','$ApellidoP','$ApellidoM','$Usuario','$Telefono','$Correo')");

			echo "<script>
				         window.alert('El producto ha sido agregado.');
				         window.location= 'productos2.php'
				    </script>";
			}else{
				if($opc==3){
					mysqli_query($connect,"UPDATE cliente SET Nombres='$Nombre',`Apepa`='$ApellidoP',`Apema`='$ApellidoM',`Email`='$Correo',`Telefono`='$Telefono',`Contra`='$Contra' WHERE Usuario='$Usuario'");

			echo "<script>
				         window.alert('El usuario ha sido modificado.');
				         window.location= 'usuarios.php'
				    </script>";
					
				}else{
					if($opc==4){
						mysqli_query($connect,"UPDATE `productos` SET `Nombre`='$Nombre',`Descripcion`='$ApellidoP',`Categoria`='$ApellidoM',`Precio`='$Usuario',`Estrellas`='$Telefono',`Imagen`='$Correo' WHERE ID='$Contra'");

			echo "<script>
				         window.alert('El producto ha sido modificado.');
				         window.location= 'productos2.php'
				    </script>";
					}
				}
			}
		}
	}else{

	$resultado =  mysqli_query($connect,"SELECT * FROM cliente WHERE Usuario='$Usuario'");
	$row=mysqli_fetch_array($resultado);
	if($row>0){
		echo "<script>
			         window.alert('Favor de ingresar un nombre de usuario diferente.');
			         window.location= 'registro.php'
			    </script>";
	}else{
		mysqli_query($connect,"INSERT INTO cliente(Nombres, Apepa, Apema, Usuario, Email, Telefono, Contra) VALUES ( '$Nombre','$ApellidoP','$ApellidoM','$Usuario','$Correo','$Telefono','$Contra')");

		echo "<script>
			         window.alert('Tu registro se ha realizado.');
			         window.location= 'index.php'
			    </script>";
	}
}

?>