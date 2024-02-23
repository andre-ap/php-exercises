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
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'https://example.com',
                'year' => 1972
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' =>'https://example.com',
                'year' => 1989
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['year']?>)
                </a>
                
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>