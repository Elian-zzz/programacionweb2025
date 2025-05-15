<?php
const dolar = 40;
const euro = 43;
const realB = 8;



if ($_SERVER["REQUEST_METHOD"] == "POST") { // no funciona el conector,  o al menos no conecta con index.html

    $seleccionado = strval($_POST["select-monedas"]);
    $pesos = intval(value: $_POST["importe"]);

    switch ($seleccionado) {
        case 'USD':
            $resultado = floatval(value: $pesos / dolar);
            $resultado_parseado = number_format($resultado, 2, ".");
            echo "resultado de conversión de $$pesos a dolares es: $resultado_parseado";
            break;
        case 'EUR':
            $resultado = floatval(value: $pesos / euro);
            $resultado_parseado = number_format($resultado, 2, ".");

            echo "resultado de conversión de $pesos a euros es: $resultado_parseado";
            break;
        case 'BRL':
            $resultado = floatval(value: $pesos / realB);
            $resultado_parseado = number_format($resultado, 2, ".");

            echo "resultado de conversión de $pesos a reales es: $resultado_parseado";
            break;
        default:
            echo "valores no asociados";
            break;
            // }
    }
}
