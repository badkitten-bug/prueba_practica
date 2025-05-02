<?php
function conectar() {
    $db = new PDO('sqlite:investigacion_tic.db'); // Ruta corregida a la base de datos en el directorio actual
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
?>