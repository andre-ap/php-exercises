<?php
    function formatador ($numero) {
        $digitos = strlen($numero);
        $quatro_primeiros = mb_substr($numero, 0, 4);
        $numeric = is_numeric($numero);

        if(!$numeric) {
            return $numero;
        }

        if ($digitos == 11 && ($quatro_primeiros == (int)'0800' || $quatro_primeiros == (int)'0300')) {
            return mb_substr($numero, 0, 4) . ' ' . mb_substr ($numero, 4, 3) . ' ' . mb_substr ($numero, 7, 3);
        } else if ($digitos == 11) {
            return '(' . mb_substr ($numero, 0, 2) . ') ' . mb_substr($numero, 2, 1) . '-' . mb_substr ($numero, 3, 4) . '-' . mb_substr ($numero, 7, 4); 
        } else if ($digitos == 10) {
            return '(' . mb_substr ($numero, 0, 2) . ') ' . mb_substr ($numero, 2, 4) . '-' . mb_substr ($numero, 6, 4);
        } else {
            return mb_substr($numero, 0, 4) . ' ' . mb_substr ($numero, 3, 4);
        }
    }
    
    $num = [
        '30044000',
        '2225271727',
        '22987654321',
        '08007024000',
        '123abc'
    ];

    foreach ($num as $numero) {
        echo "{$numero} -> ", formatador($numero), PHP_EOL;
    }
?>