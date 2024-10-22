<?php
$descripcion= $_POST['descripcion'];
$venta= $_POST['venta'];



if ($venta > 0) {
    
    echo ("Se vendieron ".$descripcion." y el valor total de la venta es: ".$venta);
}

else{
    echo ("Error de venta");
}