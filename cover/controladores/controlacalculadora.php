<?php
$numeroa= $_POST['numeroa'];
$numerob= $_POST['numerob'];
$operacion= $_POST['operacion'];


if ($operacion == 1) {
    $suma= $numeroa + $numerob;
    echo ("La suma es: ".$suma);
}

if ($operacion == 2) {
    $resta= $numeroa - $numerob;
    echo ("La resta es: ".$resta);
}

if ($operacion == 3) {
    $multiplicacion= $numeroa * $numerob;
    echo ("La multiplicacion es: ".$multiplicacion);
}

if ($operacion == 4) {
    if ($numeroa > 0 && $numerob > 0 ) {
        $division= $numeroa / $numerob ;
        if ($division > 0) {
            
            echo ("La division es: ".$division);
        }
        else{
            echo("Error");
        }
    }
    else{
        echo("Error");
    }
    
   
}