<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validación básica (reemplazar con lógica de base de datos)
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="">
        <label class="tabla">Usuario: <input type="text" name="username" required></label>
        <label class="tabla">Contraseña: <input type="password" name="password" required></label>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
