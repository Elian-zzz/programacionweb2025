<?php

/*
ejemplo de for each
for each ($monedas as $moneda) {
    echo $moneda . "<br>";
}
*/
$dia_de_la_semana = [
    "Lunes",
    "Martes",
    "Miercoles",
    "Jueves",
    "Viernes",
    "Sabado",
    "Domingo"
];
$contador_laborables = 0;
$contador_descanso = 0;
foreach ($dia_de_la_semana as $dia) {
    if ($dia == "Sabado" || $dia == "Domingo") {
        $contador_descanso++;
        echo "<strong>$dia</strong> es diba de descanso <br>";
    } else {
        $contador_laborables++;
        echo ("$dia es un dia laborable <br> ");
    }
}
echo "Total de dias laborables: $contador_laborables <br>";
echo "Total de dias de descanso: $contador_descanso <br>";