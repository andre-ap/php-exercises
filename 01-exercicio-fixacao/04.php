<?php

$inventores = [
    [ "nome" => 'Albert', "sobrenome" => 'Einstein', "nasc" => 1879,
    "morte" => 1955 ],
    [ "nome" => 'Isaac', "sobrenome" => 'Newton', "nasc" => 1643,
    "morte" => 1727 ],
    [ "nome" => 'Galileo', "sobrenome" => 'Galilei', "nasc" => 1564,
    "morte" => 1642 ],
    [ "nome" => 'Nicolaus', "sobrenome" => 'Copernicus', "nasc" => 1473,
    "morte" => 1543 ],
    [ "nome" => 'Ada', "sobrenome" => 'Lovelace', "nasc" => 1815,
    "morte" => 1852 ]
];

function formatar ($inventores) {
    $array_formatado = [];

    foreach ($inventores as $inventor) {
        $sobrenome = $inventor['sobrenome'];
        echo $sobrenome;
        $viveu = $inventor['morte'] - $inventor['nasc'];
        echo $viveu;
        $formatado = ['sobrenome' => $sobrenome, 'viveu' => $viveu];
        $array_formatado [] = $formatado;
    }

    return $array_formatado;
}

print_r (formatar($inventores));