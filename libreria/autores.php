<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';

// Consulta corregida según tu base de datos real
$query = $pdo->query("SELECT nombre, pais FROM autores");
$autores = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Listado de Autores</h2>

<ul>
<?php foreach ($autores as $autor): ?>
    <li>
        <strong><?php echo htmlspecialchars($autor['nombre']); ?></strong>
        (<?php echo htmlspecialchars($autor['pais']); ?>)
    </li>
<?php endforeach; ?>
</ul>

<?php include __DIR__ . '/includes/footer.php'; ?>
