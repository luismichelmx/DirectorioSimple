<?php
include "conexion.php";

if(isset($_POST['enviar'])){

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO contacto (cont_nombre, cont_apellidos, cont_direccion) VALUES ('$nombre', '$apellidos', '$direccion')";
if($cxn->query($sql) === TRUE){
		                echo "Se agrego contacto a la BDD <a href=index.php >Regresar</a>";
		            }else{
		                echo "Error: " . $sql . "<br>" . $cxn->error;
		            }



}else{

?>
<form action="agregar.php" method="post">

Nombre: <input type=text name=nombre /> <br>
Apellidos: <input type=text name=apellidos /> <br>
Direccion: <input type=text name=direccion /> <br>

<input type=submit name=enviar /> 
</form>
<?php
}
?>