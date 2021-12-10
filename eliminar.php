<?php

include 'conexion.php';

$datoAeliminar="DELETE FROM registros WHERE id_usuario=92";

$delete=mysqli_query($conexion, $datoAeliminar);


?>