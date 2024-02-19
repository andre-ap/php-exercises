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
        return $book['year'] >= 1950 && $book['year'] <= 2020;
    });

    require "index.view.php";