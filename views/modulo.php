<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos</title>
</head>
<body>
    <h1>Módulos</h1>

    <?php if ($models): ?>
        <ul>
            <?php foreach ($models as $modulo): ?>
                <li>
                    Módulo: <?php echo htmlspecialchars($modulo['Nome_modulo']); ?> - Seção: <?php echo htmlspecialchars($modulo['Nome_secao']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum módulo encontrado.</p>
    <?php endif; ?>
</body>
</html>
