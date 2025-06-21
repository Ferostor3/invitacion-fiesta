<?php
// Iniciar sesión al principio del script
session_start();

// Array de usuarios válidos (nombre => contraseña)
$usuarios = [
    'fernando' => '123',
    'yareth' => '234',
    'osvaldo' => '345',
    // Agregar más usuarios aquí con el formato: 'usuario' => 'contraseña'
];

// Obtener datos del formulario (con limpieza básica)
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

// Verificar credenciales (insensible a mayúsculas/minúsculas en el usuario)
if (!empty($username) && isset($usuarios[strtolower($username)])) {
    if ($password === $usuarios[strtolower($username)]) {
        // Credenciales correctas
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = htmlspecialchars($username); // Protección XSS
        header("Location: invitacion.php");
        exit;
    }
}

// Si llega aquí es porque las credenciales son incorrectas
echo "<script>
    alert('Credenciales incorrectas. Introduce las correctas');
    window.location.href = 'index.php';
</script>";
exit;
?>