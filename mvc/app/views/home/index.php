<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <ul>
        <?php foreach($data as $d): ?>
            <li><?= $d['email']; ?></li>
    <h1>diaa</h1>
        <?php endforeach; ?>
    </ul>
</body>
</html>