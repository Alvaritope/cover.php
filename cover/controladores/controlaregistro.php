<?php
$nombre= $_POST['nombre'];
$documento= $_POST['documento'];
$edad= $_POST['edad'];


if ($edad >= 18) {
    
    echo ("Usuario ".$nombre." con (CC) Cedula de ciudadania: ".$documento." has sido registrado en el sistema, tienes ".$edad. " años");
}

else{
    echo (" ".$nombre." Eres un menorcito");
}

