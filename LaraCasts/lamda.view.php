<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda functions</title>
</head>

<body>
    <ul>
        <?php foreach ($filtering as $item) : ?>
            <li>
                <?= $item["name"] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>