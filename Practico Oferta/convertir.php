<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Edad = intval(value: $_POST["edad"]);
    $Nombre = strval(value: $_POST["nombre"]);
    if ($Edad >= 11 && $Edad <= 19) {
        echo " $Nombre puede acceder a la oferta";
    } else {
        echo " $Nombre no podes acceder a la oferta";
    }
}
