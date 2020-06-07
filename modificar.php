<?php
include "conexion.php";

if(isset($_POST['guardar'])){

	$fid = $_POST['id'];
	$fnombre = $_POST['nombre'];
	$fapellido = $_POST['apellido'];
	$fdireccion = $_POST['direccion'];

echo "Se modifico el registro con exito <a href=index.php> Regresar </a>";

$sql = "UPDATE contacto SET cont_nombre = '$fnombre', cont_apellidos = '$fapellido', cont_direccion = '$fdireccion' WHERE cont_id = '$fid'";
$modificado = $cxn->query($sql);

}else{
	
		$id = $_GET['id'];

		$sql = "SELECT * FROM contacto WHERE cont_id = $id";
		if($resultado = $cxn->query($sql)){
				$fila=$resultado->fetch_object();

				$nombre = $fila -> cont_nombre;
				$apellido = $fila -> cont_apellidos;
				$direccion = $fila -> cont_direccion;

				echo "<form action='' method='POST'>";
				echo "Nombre: <input type=text name=nombre value=$nombre > <br>";
				echo "Apellido: <input type=text name=apellido value=$apellido > <br>";
				echo "Direccion: <input type=text name=direccion value=$direccion > <br>";
				echo "<input type=hidden name=id value=$id>";
				echo "<input type=submit name=guardar value=Guardar>";
				echo "</form>";
		}

}

?>