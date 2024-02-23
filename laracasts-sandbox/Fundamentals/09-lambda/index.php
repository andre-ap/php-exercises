<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'https://example.com',
            'year' => 1968
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'https://example.com',
            'year' => 2021
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'https://example.com',
            'year' => 2011
        ]
    ];

    $filter = function ($items, $fn){
        $filteredItems = [];

        foreach ($items as $item){
            if ($fn($item)){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    };

    // $filter => array_filter
    $filteredBooks = array_filter ($books, function($book) {
        return $book['author'] === 'Andy Weir';
    });

    

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['year'] ?>)
                    </a>
                </li>
        <?php endforeach ?>
    </ul>

</body>

</html>