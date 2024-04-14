<?php
// Ruta al archivo de la base de datos SQLite
$databaseFile = '/home/devmartin/Documentos/www/html/pruebas/database.sqlite';

// Función para conectar a la base de datos SQLite
function connectToDatabase()
{
    $pdo = new PDO('sqlite:' . $GLOBALS['databaseFile']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

// Función para obtener todos los usuarios de la base de datos
function getUsers()
{
    $pdo = connectToDatabase();
    $stmt = $pdo->query("SELECT * FROM usuarios");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para agregar un nuevo usuario a la base de datos
function addUser($nombre, $email)
{
    $pdo = connectToDatabase();
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)");
    $stmt->execute(['nombre' => $nombre, 'email' => $email]);
}

// Función para actualizar un usuario en la base de datos
function updateUser($id, $nombre, $email)
{
    $pdo = connectToDatabase();
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id");
    $stmt->execute(['id' => $id, 'nombre' => $nombre, 'email' => $email]);
}

// Función para eliminar un usuario de la base de datos
function deleteUser($id)
{
    $pdo = connectToDatabase();
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

// Verificar si se envió el formulario de agregar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre']) && isset($_POST['email'])) {
    addUser($_POST['nombre'], $_POST['email']);
}

// Verificar si se envió el formulario de editar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editId']) && isset($_POST['editNombre']) && isset($_POST['editEmail'])) {
    updateUser($_POST['editId'], $_POST['editNombre'], $_POST['editEmail']);
}

// Verificar si se envió el formulario de eliminar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteId'])) {
    deleteUser($_POST['deleteId']);
}

// Obtener todos los usuarios de la base de datos
$usuarios = getUsers();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuarios</title>
</head>
<body>
    <h1>CRUD de Usuarios</h1>

    <!-- Formulario para agregar usuario -->
    <h2>Agregar Usuario</h2>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Agregar Usuario</button>
    </form>

    <hr>

    <!-- Listado de usuarios -->
    <h2>Lista de Usuarios</h2>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li>
                <?= $usuario['nombre'] ?> - <?= $usuario['email'] ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="editId" value="<?= $usuario['id'] ?>">
                    <input type="hidden" name="editNombre" value="<?= $usuario['nombre'] ?>">
                    <input type="hidden" name="editEmail" value="<?= $usuario['email'] ?>">
                    <button type="submit">Editar</button>
                </form>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="deleteId" value="<?= $usuario['id'] ?>">
                    <button type="submit">Borrar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Formulario para editar usuario -->
    <?php if (isset($_POST['editId'])): ?>
        <h2>Editar Usuario</h2>
        <form method="post">
            <input type="hidden" name="editId" value="<?= $_POST['editId'] ?>">
            <label for="editNombre">Nombre:</label>
            <input type="text" id="editNombre" name="editNombre" value="<?= $_POST['editNombre'] ?>" required><br><br>
            <label for="editEmail">Email:</label>
            <input type="email" id="editEmail" name="editEmail" value="<?= $_POST['editEmail'] ?>" required><br><br>
            <button type="submit">Guardar Cambios</button>
        </form>
    <?php endif; ?>
</body>
</html>
