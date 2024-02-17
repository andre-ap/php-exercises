<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
    body{
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100vh;
        font-family: sans-serif;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <h1>Recomended Books</h1>

    <?php
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The langoliers",
            "Hail Mary"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>