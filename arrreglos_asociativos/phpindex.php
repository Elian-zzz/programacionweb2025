
<?php
/*
 * ==============================
 * Sello del desarrollador
 * ==============================
 * Nombre:Elian Gutierrez  
 *  * Videojuego Insignia: [The Legend of Zelda] 
 * ==============================

*/
// Creamos una variable un arreglo asocioativo el cual contiene clave descriptiva y valor.
$Videojuego = ["titulo_juego" => "The Legend of Zelda", "consola" => "NES", "año_lanzamiento" => 1986, "precio" => 50.00];
// Enseñamos en el programa con una intrfaz amigable los datos dentro de la variable $Videojuego
echo " Nombre: {$Videojuego["titulo_juego"]} | Consola: {$Videojuego["consola"]} | Año: {$Videojuego["año_lanzamiento"]} | Precio: $ {$Videojuego["precio"]}";
// Añadimos los pares clave valor de stock que almacena 10 y en_venta que almacena un valor booleano
$Videojuego['stock'] = 10;
$Videojuego['en_venta'] = true;
// Creamos una interfaz mas legible + la adaptación del resultado de en_venta
echo "<h2>Ficha completa del producto</h2>";
$resultado = "Disponible";
if ($Videojuego["en_venta"] == false) {
    $resultado = "No disponible";
}
// Tabla con Table Head y Table Data con los nombres de las claves 
echo "<table border=1>
<tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Año de lanzamiento</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>En venta</th>
        </tr>
        <tr>
            <td>$Videojuego[titulo_juego]</td>
            <td>$Videojuego[consola]</td>
            <td>$Videojuego[año_lanzamiento]</td>
            <td>$Videojuego[precio]</td>
            <td>$Videojuego[stock]</td>
            
            <td>$resultado</td>
            
        </tr>
        

</table>";
// Creamos dos variables identicas a la variable $Videojuego que como molde guarda información de otros juegos
$Videojuego2 = ["titulo_juego" => "Super Mario Bros. 3", "consola" => "NES", "año_lanzamiento" => 1988, "precio" => 45.00, "stock" => 15, "en_venta" => true];
$Videojuego3 =  ["titulo_juego" => "Chrono Trigger", "consola" => "SNES", "año_lanzamiento" => 1995, "precio" => 80.00, "stock" => 5, "en_venta" => true];
// Creamos una variable que guarda un arreglo asociativo el cual con el nombre accede a la información del juego
$Inventario = [
    "The Legend of Zelda" => $Videojuego,
    "Super Mario Bros. 3" => $Videojuego2,
    "Chrono Trigger" => $Videojuego3
];

/* 
  * Creo una tabla con un foreach el cual recorra el arreglo $Inventario muetre en una tabla
  * accediendo al nombre y año de lanzamiento de cada videojuego guardado en el arreglo de $Inventario
*/
echo "
<br>
    <table border=1>
      <tr>
        <th>Nombre</th>
        <th>Consola</th>
      </tr>
      <tr>";

foreach ($Inventario as $jueguito) {
    echo " <tr> <td>{$jueguito['titulo_juego']}</td><td>{$jueguito['consola']}</td> </tr>";
}

echo " </tr>
    </table>";
