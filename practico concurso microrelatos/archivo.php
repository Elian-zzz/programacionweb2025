<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = strval($_POST["textarea"]);
    $Palabras_beta = explode(" ", $texto);
    $Palabra_alfa = [];
    foreach ($Palabras_beta as $palabra) {
        if ($palabra != "." && $palabra != ",") {
            $Palabra_alfa[] = $palabra;
        }
    }
    $Palabra_final = count($Palabra_alfa);
    $longitud_cadena = strlen($texto);
    echo ("<br>La cantidad de palabras en el texto es de $Palabra_final </br>");
    echo ("<br>La longitud de cadena es de $longitud_cadena</br>");
    if ($Palabra_final <= 100 && $longitud_cadena <= 700) echo ("El texto cumple con los parametros requeridos :)");
    else echo ("EL texto no cuenta con los requerimientos minimos para participar :(");
}
