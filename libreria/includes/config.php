<?php
// includes/config.php
// Cambia estos valores a los de tu hosting
$db_host = 'localhost';
$db_name = 'libreria';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (PDOException $e) {
    // En entorno de desarrollo mostrar el error; en producción loggear y mostrar mensaje genérico
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
