<?php
require_once 'conexion.php';
include 'crud.php'; // El archivo donde agrupas las funciones de arriba

// Operaciones
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['agregar'])) {
        agregarUsuario($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['compania'], $_POST['calle'], $_POST['latitud'], $_POST['longitud']);
    }
    if (isset($_POST['actualizar'])) {
        actualizarUsuario($_POST['id'], $_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['compania'], $_POST['calle'], $_POST['latitud'], $_POST['longitud']);
    }
    if (isset($_POST['eliminar'])) {
        eliminarUsuario($_POST['id']);
    }
}
$usuarios = obtenerUsuarios();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Usuarios</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        th, td {
            padding: 12px 10px;
            text-align: left;
        }
        th {
            background: #1976d2;
            color: #fff;
        }
        tr:nth-child(even) {
            background: #f0f4f8;
        }
        tr:hover {
            background: #e3f2fd;
        }
        form {
            margin: 0;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            padding: 8px;
            margin: 4px 2px;
            border: 1px solid #bdbdbd;
            border-radius: 4px;
            width: 180px;
        }
        input[type="submit"] {
            background: #1976d2;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin: 2px 0;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background: #1565c0;
        }
        .acciones form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Usuarios</h1>
    <table>
        <tr>
            <th>Id</th><th>Nombre</th><th>Teléfono</th><th>Correo</th><th>Compañía</th><th>Calle</th><th>Latitud</th><th>Longitud</th><th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['Id'] ?></td>
                <td><?= htmlspecialchars($usuario['Nombre']) ?></td>
                <td><?= htmlspecialchars($usuario['Telefono']) ?></td>
                <td><?= htmlspecialchars($usuario['Correo']) ?></td>
                <td><?= htmlspecialchars($usuario['Compañia']) ?></td>
                <td><?= htmlspecialchars($usuario['Calle']) ?></td>
                <td><?= htmlspecialchars($usuario['Latitud']) ?></td>
                <td><?= htmlspecialchars($usuario['Longitud']) ?></td>
                <td class="acciones">
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $usuario['Id'] ?>">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                    <form method="get" action="editar.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $usuario['Id'] ?>">
                        <input type="submit" value="Editar">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Agregar Usuario</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="compania" placeholder="Compañía" required>
        <input type="text" name="calle" placeholder="Calle" required>
        <input type="number" step="any" name="latitud" placeholder="Latitud" required>
        <input type="number" step="any" name="longitud" placeholder="Longitud" required>
        <input type="submit" name="agregar" value="Agregar">
    </form>
</body>
</html>
