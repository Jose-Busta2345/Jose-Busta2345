<?php
    $conexion= new mysqli("localhost", "id19010039_nga", "Si#12121", "id19010039_bbl");
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>