# CRUD de Usuarios con PHP y SQLite

Este proyecto es una aplicación web sencilla para la gestión de usuarios (CRUD: Crear, Leer, Actualizar, Eliminar) usando PHP y SQLite.

## Características
- Listado de usuarios
- Agregar, editar y eliminar usuarios
- Interfaz web moderna y fácil de usar

## Requisitos
- PHP 7.x o superior
- Servidor web (recomendado: XAMPP, WAMP, MAMP, etc.)
- Extensión PDO para SQLite habilitada

## Instalación
1. Clona este repositorio o descarga los archivos en tu servidor local:
   ```
   git clone https://github.com/badkitten-bug/prueba_practica.git
   ```
2. Coloca la carpeta del proyecto en el directorio `htdocs` de XAMPP (o el equivalente en tu servidor).
3. Asegúrate de que el archivo de base de datos `investigacion_TIC.db` esté en la raíz del proyecto.
4. Inicia Apache desde XAMPP.
5. Accede a la aplicación desde tu navegador:
   ```
   http://localhost/prueba_practica/
   ```

## Estructura de archivos
- `index.php`: Página principal con el listado y formulario de usuarios.
- `editar.php`: Formulario para editar usuarios.
- `crud.php`: Funciones CRUD para la base de datos.
- `conexion.php`: Conexión a la base de datos SQLite.
- `investigacion_TIC.db`: Archivo de base de datos SQLite.

## Notas
- Si necesitas reiniciar la base de datos, puedes reemplazar el archivo `.db` por una copia nueva.
- El diseño es responsivo y moderno gracias a CSS puro.

---

Desarrollado por [badkitten-bug](https://github.com/badkitten-bug) 