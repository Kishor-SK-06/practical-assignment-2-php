<?php
    $arr = [12, 3, 4, 1, 6, 9];
    $sum = 19;
    
    echo "sum = $sum<br>";
    for($i = 0; $i < count($arr) - 2; $i++)
    {
        for($j = $i + 1; $j < count($arr) - 1; $j++)
        {
            for($k = $j + 1; $k < count($arr); $k++)
            {
                if(($arr[$i] + $arr[$j] + $arr[$k]) == $sum)
                    echo "Triplet = $arr[$i], $arr[$j], $arr[$k]<br>";
            }
        }
    }
?>