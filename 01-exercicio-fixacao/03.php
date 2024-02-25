<?php

$frutas = [
    'Laranja',
    'Uva',
    'Banana',
    'Laranja',
    'Pera',
    'Abacate',
    'Uva',
    'Melancia',
    'Uva'
];

function conta_fruta ($frutas) {
    $qtd = [];

    foreach ($frutas as $fruta) {
        if (array_key_exists($fruta, $qtd)) {
            $qtd[$fruta] += 1;
        } else {
            $qtd[$fruta] = 1;
        }
    }

    return $qtd;
}

var_dump (conta_fruta ($frutas));