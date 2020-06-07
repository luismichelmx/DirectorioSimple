<?php
include "conexion.php";

echo "Directorio Simple <br> ";

echo "<a href=agregar.php>Agregar Contacto</a> ";


$sql = "SELECT * FROM contacto"; 

if ($resultado = $cxn->query($sql)){
        while($fila=$resultado->fetch_object()) 
        { 
			$contactoid = $fila -> cont_id;
			$contactonombre = $fila -> cont_nombre;
			$contactoapellido = $fila -> cont_apellidos;	
			$contactonombre = ucwords($contactonombre);
			$contactoapellido = ucwords($contactoapellido);

			echo "<div> $contactoid $contactonombre $contactoapellido <a href=modificar.php?id=$contactoid>Editar</a> | <a href=borrar.php?id=$contactoid>Borrar</a></div>";
		}
}
		
?>