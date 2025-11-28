<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';

// Consulta usando columnas reales de la BD
$query = $pdo->query("SELECT titulo, tipo, fecha_pub, precio FROM titulos LIMIT 20");
$libros = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="titulo">📚 Librería Online</h1>
<p class="subtitulo">Explora los libros disponibles</p>

<div class="contenedor-libros">
<?php foreach ($libros as $libro): ?>
    <div class="card-libro">
        <h3><?php echo htmlspecialchars($libro['titulo']); ?></h3>
        <p><strong>Tipo:</strong> <?php echo htmlspecialchars($libro['tipo']); ?></p>
        <p><strong>Publicado:</strong> <?php echo htmlspecialchars($libro['fecha_pub']); ?></p>
        <p><strong>Precio:</strong> $<?php echo htmlspecialchars($libro['precio']); ?></p>
    </div>
<?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
