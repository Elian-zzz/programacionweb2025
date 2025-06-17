<?php
// Ejercicio 1 con Bruno Perez
$tripulantes  = [
    "Alex Rider",
    "Mia Kovalik",
    "Raj Patel",
    "Elena Vega",
    "Jules Bergman"
];
echo (" Lista de tripulantes: <br>");
foreach ($tripulantes as $tripulante) {
    echo ("Tripulante: $tripulante <br>");
}
echo (" <br> Cantidad de tripulantes en la nave: " . count($tripulantes) . "<br>");

echo ("Tripulante en la tercera posición:  $tripulantes[2] <br>");
$tripulantes[1] = "Nadia Petrov";
$nuevos_tripulantes = [
    "Sam Carter",
    "Leo Wu",
    "Zara Khan"
];
foreach ($nuevos_tripulantes as $tripulante) {
    $tripulantes[] = $tripulante;
}
//      - Ejercicio 2 con Bruno Pereira
// $tripulantes[0] = "- Evacuado -";
array_shift($tripulantes); // eliminamos el primer elemento del arreglo 
array_unshift($tripulantes, "Dmitri Volkov", "Yuki Tanaka"); // Agrega dos nuevos elementos al principio del array
foreach ($tripulantes as $tripulante) {
    echo "<br> Tripulante: $tripulante ";
}
echo (" <br> Cantidad de tripulantes en la nave: " . count($tripulantes) . "<br>");

// Actividad 3
$n = 1;
foreach ($tripulantes as $tripulante) {
    echo "<br> $n $tripulante ";
    $n++;
}

// Función de búsqueda con ayuda de copilot
function buscarTripulante($nombre, $tripulantes)
{
    if ($nombre === "Leo Wu") {
        echo "<br>Tripulante '$nombre' con <strong>entrenamiento en gravedad cero.</strong><br>";
    } elseif (in_array($nombre, $tripulantes)) {
        echo "<br>El tripulante '$nombre' está registrado.<br>";
    } else {
        echo "<br>El tripulante '$nombre' NO está registrado.<br>";
    }
}

buscarTripulante("Leo Wu", $tripulantes);
buscarTripulante("Sam Carter", $tripulantes);
buscarTripulante("Bruno Pereira", $tripulantes);

// 1. agregarTripulante(): Añade un nombre al final del arreglo
function agregarTripulante(&$tripulantes, $nombre)
{
    $tripulantes[] = $nombre;
}

// 2. evacuarTripulante(): Elimina el último tripulante y devuelve su nombre
function evacuarTripulante(&$tripulantes)
{
    return array_pop($tripulantes);
}

// 3. verificarTripulante(): Retorna true o false si alguien está en la lista
function verificarTripulante($nombre, $tripulantes)
{
    foreach ($tripulantes as $tripulante) {
        if ($nombre == $tripulante) echo "$tripulante está en la lista de tripulantes";
        else echo "$tripulante no está en la lista de tripulantes";
    }
}
// 4. listarTripulacion(): Muestra los nombres en una lista HTML numerada
function listarTripulacion($tripulantes)
{
    echo "<ol>";
    foreach ($tripulantes as $tripulante) {
        echo "<li>$tripulante</li>";
    }
    echo "</ol>";
}

agregarTripulante($tripulantes, "Bruno Pereira");
$evacuado = evacuarTripulante($tripulantes);
echo "<br>Evacuado: $evacuado<br>";

if (verificarTripulante("Yuki Tanaka", $tripulantes)) {
    echo "Yuki Tanaka está en la tripulación.<br>";
} else {
    echo "Yuki Tanaka NO está en la tripulación.<br>";
}

echo "Lista numerada de tripulantes:";
listarTripulacion($tripulantes);

$temperaturas = [12.5, -5.3, 8.7, -23.1, 15.4];

function mas_frio($temperaturas)
{
    $mas_frio = 0;

    // Evalúa la temperatúra mas baja
    foreach ($temperaturas as $temperatura) {
        if ($temperatura < 0 && $mas_frio == 0) {
            $mas_frio = $temperatura;
        } elseif ($temperatura < $mas_frio) {
            $mas_frio = $temperatura;
        }
    }
    echo "Temperatura más fría: $mas_frio °C<br>";
}
function promedioTemperaturas($temperaturas)
{
    $suma = 0;
    $cantidad = count($temperaturas);

    foreach ($temperaturas as $temperatura) {
        $suma += $temperatura;
    }

    if ($cantidad > 0) {
        $promedio = $suma / $cantidad;
        echo "Promedio de temperaturas: $promedio °C<br>";
    } else {
        echo "No hay temperaturas para calcular el promedio.<br>";
    }
}

mas_frio($temperaturas);
promedioTemperaturas($temperaturas);

$mensaje = [12, 5, 8, 19, 3];
$mensaje[3] = 9;
function decifrarMensaje($mensaje)
{
    $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $mensaje_decifrado = "";
    foreach ($mensaje as $letra) {
        foreach ($letras as $indice => $valor) {
            if ($letra == $indice + 1) {
                $mensaje_decifrado .= $valor;
                break; // Salimos del bucle interno una vez que encontramos la letra
            }
        }
    }
    return $mensaje_decifrado;
}
echo decifrarMensaje($mensaje) . "<br>";

$zonas = [28, -5, 14, -30, 42, 3];
function zonasTemperatura($zonas)
{
    foreach ($zonas as $elemento) {
        if ($elemento < 30 && $elemento > 0) echo "<br>$elemento ✅Habitable</br>";
        else if ($elemento < 0) echo  "<br>$elemento ❌Congelada </br>";
        else echo  "<br>$elemento {!} Extremófila </br>";
    }
}
zonasTemperatura($zonas);
