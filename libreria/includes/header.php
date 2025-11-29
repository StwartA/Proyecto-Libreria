<?php
// inicio del buffer
if (session_status() == PHP_SESSION_NONE) { 
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Librería Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="navbar-brand">Trawts Librery</a>
    <div class="navbar-links">
        <a href="index.php">Inicio</a>
        <a href="autores.php">Autores</a>
        <a href="contacto.php">Contacto</a>
    </div>
    <button class="navbar-button">Menú</button>
</nav>


<div class="container mt-4">
