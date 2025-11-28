<?php
include "includes/db.php";

$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$asunto = $_POST["asunto"];
$comentario = $_POST["comentario"];

$stmt = $pdo->prepare("
    INSERT INTO contacto (fecha, correo, nombre, asunto, comentario)
    VALUES (NOW(), :correo, :nombre, :asunto, :comentario)
");

$stmt->execute([
    ":correo" => $correo,
    ":nombre" => $nombre,
    ":asunto" => $asunto,
    ":comentario" => $comentario
]);

echo "<script>alert('Mensaje enviado correctamente'); window.location='contacto.php';</script>";
