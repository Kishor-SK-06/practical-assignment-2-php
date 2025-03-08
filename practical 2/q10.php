<?php

    function filter_array($arr)
    {
        $fa = [];

        foreach($arr as $word)
        {
            if(in_array($word[0], ['A', 'a', 'G', 'g', 'L', 'l', 'Q', 'q', 'W', 'w']))
            {
                $fa[] = $word;
            }
        }

        return $fa;

    }

    $ARR = ["apple", "banana", "grapes", "lemon", "quilt", "watermelon", "orange", "Guvava"];

    $res = filter_array($ARR);

    echo "words which starts from A, G, L, Q, W<br><br>";
    foreach($res as $val)
    {
        echo $val. "<br>";
    }
?>
