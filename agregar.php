<?php 
include ('conexion.php');

$can=$_POST['num'];
$id=$_POST['id'];
$user=$_POST['user'];

	$resultado =  mysqli_query($connect,"SELECT ID FROM cliente WHERE Usuario='$user'");
	$row=mysqli_fetch_array($resultado);

 	mysqli_query($connect,"INSERT INTO productos_cliente(ID_Cliente, ID_Producto, Cantidad)VALUES('$row[0]','$id','$can')");

	echo "<script>
				window.alert('El producto se añadió a su carrito.');
		        window.location= 'productos.php';
		    </script>";
	

?>