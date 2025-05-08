<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seleccionado = $_POST["select-monedas"];
    $monto = intval($_POST["importe"]);
}
