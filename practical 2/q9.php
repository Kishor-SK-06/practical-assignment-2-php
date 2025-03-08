<?php
    $ca = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $arr = str_split($ca);

    $final_array = [];
    $i = 0;

    //for first digit
    $f1 = rand(1,26);
    $final_array[$i++] = $arr[$f1];

    //for second digit
    $s2 = rand(1,26);
    $final_array[$i++] = $arr[$s2];

    //for third digit
    $t3 = rand(1,26);
    $final_array[$i++] = $arr[$t3];

    //for fourth digit
    $f4 = rand(1,26);
    $final_array[$i++] = $arr[$f4];

    //for fifth digit
    $f5 = rand(1,26);
    $final_array[$i++] = $arr[$f5];

    //for sixth digit
    $s6 = rand(1000,9999);
    $final_array[$i++] = $s6;

    //for seventh digit
    $s7 = rand(1,26);
    $final_array[$i] = $arr[$s7];


    //display the pattern
    echo "pattern: ";
    foreach($final_array as $val)
    {
        echo $val;
    }

?>