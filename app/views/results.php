<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Search results</h1>

<ul>
<?php if (empty($results)): ?>
    <p>No results found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($results as $rider): ?>
            <li>
                <strong><?= htmlspecialchars($rider['rider']) ?></strong>
                (<?= htmlspecialchars($rider['nationality']) ?>,
                <?= htmlspecialchars($rider['birthyear']) ?>) –
                <?= htmlspecialchars($rider['rider_class']) ?> –
                <?= htmlspecialchars($rider['races']) ?> races
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</ul>

<a href="index.php">Back</a>

</body>
</html>
