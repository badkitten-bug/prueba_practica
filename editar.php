<?php
require_once 'conexion.php';
include 'crud.php';

$usuario = obtenerUsuarioPorId($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="post" action="index.php">
        <input type="hidden" name="id" value="<?= $usuario['Id'] ?>">
        <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['Nombre']) ?>" required>
        <input type="text" name="telefono" value="<?= htmlspecialchars($usuario['Telefono']) ?>" required>
        <input type="email" name="correo" value="<?= htmlspecialchars($usuario['Correo']) ?>" required>
        <input type="text" name="compania" value="<?= htmlspecialchars($usuario['Compañia']) ?>" required>
        <input type="text" name="calle" value="<?= htmlspecialchars($usuario['Calle']) ?>" required>
        <input type="number" step="any" name="latitud" value="<?= $usuario['Latitud'] ?>" required>
        <input type="number" step="any" name="longitud" value="<?= $usuario['Longitud'] ?>" required>
        <input type="submit" name="actualizar" value="Actualizar">
    </form>
</body>
</html>
