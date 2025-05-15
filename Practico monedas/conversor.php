<?php
// const dolar = 40;
// const euro = 43;
// const realB = 8;
$monedas = [40, 43, 8]; // reemplazamos las constantes con arreglos
var_dump($monedas); // para ver el contenido del array 
// Para agregar un elemento al ultimo lugar libre de un array es de la siguiente manera
// $monedas[] = 100; // agrega un elemento al final del array
// Para agregar un elemento en una posicion especifica del array se hace de la siguiente manera

if ($_SERVER["REQUEST_METHOD"] == "POST") { // no funciona el conector,  o al menos no conecta con index.html

    $seleccionado = strval($_POST["select-monedas"]);
    $pesos = intval(value: $_POST["importe"]);

    switch ($seleccionado) {
        case 'USD':
            $resultado = floatval(value: $pesos / $monedas[0]);
            $resultado_parseado = number_format($resultado, 2, ".");
            echo "resultado de conversión de UY$$pesos a dolares es: US$$resultado_parseado";
            break;
        case 'EUR':
            $resultado = floatval(value: $pesos / $monedas[1]);
            $resultado_parseado = number_format($resultado, 2, ".");

            echo "resultado de conversión de UY$$pesos a euros es: $resultado_parseado €";
            break;
        case 'BRL':
            $resultado = floatval(value: $pesos / $monedas[2]);
            $resultado_parseado = number_format($resultado, 2, ".");

            echo "resultado de conversión de UY$$pesos a reales es: $resultado_parseado R$";
            break;
        default:
            echo "valores no asociados";
            break;
            // }
    }
}
