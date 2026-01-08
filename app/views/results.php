<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Search results</h1>

<ul>
<?php foreach ($data as $key => $value): ?>
    <?php if (!empty($value) && $key !== 'page'): ?>
        <li><strong><?= htmlspecialchars($key) ?>:</strong> <?= htmlspecialchars($value) ?></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>

<a href="index.php">Back</a>

</body>
</html>
