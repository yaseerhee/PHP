<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operacion= $_GET['operacion'];

    if($operacion == "+"){
        $resultado = $numero1 + $numero2;
    }else if($operacion == "-"){
        $resultado = $numero1 - $numero2;
    }else if($operacion == "x"){
        $resultado = $numero1 * $numero2;
    }else if($operacion == "/"){
        $resultado = $numero1 / $numero2;
    }

    echo "<h2>El resultado es: </h2>" . $resultado;

?>