<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Books</title>
</head>
<body>
    <h1>Recommended Books: </h1>

    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ]; // declared an array of books
    ?>

    <ul>
    <!-- Looped the books array using the short-hand foreach loop -->
        <?php foreach( $books as $book ) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>