<?php include __DIR__ . '/includes/header.php'; ?>

<h2>Contacto</h2>

<?php if (isset($_GET['ok'])): ?>
    <p style="color:green;">Mensaje enviado correctamente.</p>
<?php endif; ?>

<form action="guardar_contacto.php" method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Mensaje:</label>
    <textarea name="mensaje" required></textarea>

    <button type="submit">Enviar</button>
</form>

<?php include __DIR__ . '/includes/footer.php'; ?>
