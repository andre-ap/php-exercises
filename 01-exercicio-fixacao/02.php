<?php
require_once "01.php";

function formatarArray (&$numeros){
    $qtd = count($numeros);
    for ($i=0; $i<$qtd; $i++){
        $numeros[$i] = formatador($numeros[$i]);
    }
}

