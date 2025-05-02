<?php
require_once 'conexion.php';

// Mostrar todos los usuarios
function obtenerUsuarios() {
    $db = conectar();
    return $db->query("SELECT * FROM Usuarios")->fetchAll(PDO::FETCH_ASSOC);
}

// Agregar usuario
function agregarUsuario($nombre, $telefono, $correo, $compania, $calle, $latitud, $longitud) {
    $db = conectar();
    $stmt = $db->prepare("INSERT INTO Usuarios (Nombre, Telefono, Correo, Compañia, Calle, Latitud, Longitud) VALUES (?, ?, ?, ?, ?, ?, ?)");
    return $stmt->execute([$nombre, $telefono, $correo, $compania, $calle, $latitud, $longitud]);
}

// Actualizar usuario
function actualizarUsuario($id, $nombre, $telefono, $correo, $compania, $calle, $latitud, $longitud) {
    $db = conectar();
    $stmt = $db->prepare("UPDATE Usuarios SET Nombre=?, Telefono=?, Correo=?, Compañia=?, Calle=?, Latitud=?, Longitud=? WHERE Id=?");
    return $stmt->execute([$nombre, $telefono, $correo, $compania, $calle, $latitud, $longitud, $id]);
}

// Eliminar usuario
function eliminarUsuario($id) {
    $db = conectar();
    $stmt = $db->prepare("DELETE FROM Usuarios WHERE Id=?");
    return $stmt->execute([$id]);
}

// Obtener usuario por ID
function obtenerUsuarioPorId($id) {
    $db = conectar();
    $stmt = $db->prepare("SELECT * FROM Usuarios WHERE Id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>