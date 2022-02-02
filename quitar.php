<?php 
include ('conexion.php');

$opc=$_GET['opc'];
$id=$_GET['id'];

	if($opc==1){
 	mysqli_query($connect,"DELETE FROM productos_cliente WHERE ID_pc='$id'");

	echo "<script>
				window.alert('El producto se ha quitado de su carrito.');
		        window.location= 'carrito.php';
		    </script>";
		}else{
			if($opc==2){
				$resultado =  mysqli_query($connect,"SELECT count(*) FROM productos_cliente,productos,cliente WHERE cliente.ID=productos_cliente.ID_Cliente and productos_cliente.ID_Producto=productos.ID and cliente.ID='$id'");
				$row=mysqli_fetch_array($resultado);
				if($row[0]>0){
						echo "<script>
						window.alert('El usuario tiene productos en su carrito.');
				        window.location= 'usuarios.php';
				    </script>";
				}else{
				mysqli_query($connect,"DELETE FROM cliente WHERE ID='$id'");

				echo "<script>
					window.alert('El usuario se ha eliminado.');
			        window.location= 'usuarios.php';
			    </script>";
					}
			}else{
				if($opc==3){
					mysqli_query($connect,"DELETE FROM productos WHERE ID='$id'");

				echo "<script>
					window.alert('El producto se ha eliminado.');
			        window.location= 'productos2.php';
			    </script>";
				}
			}
		}
	

?>