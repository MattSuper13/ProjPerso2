<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="/../../public/images/logo_favicon.png"> <!-- Favicon -->
</head>
<body>

<h1>Search results</h1>

<?php if (empty($results)): ?>
    <p>No results found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($results as $rider): ?>
            <li>
                <strong><?= htmlspecialchars($rider['RIDER']) ?></strong>
                (<?= htmlspecialchars($rider['NATIONALITY']) ?>,
                <?= htmlspecialchars($rider['BIRTHYEAR']) ?>) –
                <?= htmlspecialchars($rider['RIDER_CLASS']) ?> –
                <?= htmlspecialchars($rider['RACES']) ?> RACES
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<a href="index.php">Back</a>

</body>
</html>
