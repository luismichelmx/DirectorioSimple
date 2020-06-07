<?php

$servdb="localhost";
$usudb="root";
$passdb="";
$datosdb="directorio";

$cxn = new mysqli($servdb, $usudb, $passdb, $datosdb);

if ($cxn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $cxn->connect_errno . ") " . $cxn->connect_error;
}
?>