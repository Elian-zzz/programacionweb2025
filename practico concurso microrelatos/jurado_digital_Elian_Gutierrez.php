<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = strval($_POST["textarea"]);
    $Palabras_beta = explode(" ", $texto);
    $Palabra_alfa = [];
    foreach ($Palabras_beta as $palabra) { // Evalúa que las palabras no sean ni puntos in comas sueltas
        if ($palabra != "." && $palabra != ",") {
            $Palabra_alfa[] = $palabra;
        }
    }
    $Palabra_final = count($Palabra_alfa);
    $longitud_cadena = strlen($texto);
    echo ("<br>La cantidad de palabras en el texto es de $Palabra_final </br>");
    echo ("<br>La longitud de cadena es de $longitud_cadena</br>");
    if ($Palabra_final <= 100 && $longitud_cadena <= 700) echo ("El texto cumple con los parametros requeridos :)");
    elseif ($Palabra_final > 100 && $longitud_cadena > 700) {
        echo ("<br><p>EL texto no cuenta con los requerimientos minimos para participar :(</p></br>");
        echo ("<br><label>El texto exede las <b>100 palabras</b> y los <b>700 caracteres</b></label></br>");
    } elseif ($Palabra_final > 100) echo ("<br><label>El texto exede las <b>100 palabras</b></label></br>");
    else echo ("<br><label>El texto exede los <b>700 caracteres</b></label></br>");
}
