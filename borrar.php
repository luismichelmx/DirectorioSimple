<?php
include "conexion.php";



//if(isset($_GET['id'])){
	$id=$_GET['id'];
//}else{$id="";}

$sql="DELETE FROM contacto WHERE cont_id = '$id' ";
if($cxn->query($sql) === TRUE){
		                echo "Se borro el id $id para regresar Clic Aqui!";
		            }else{
		                echo "Error: " . $sql . "<br>" . $cxn->error;
		            }




?>