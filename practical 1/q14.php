<?php
    $arr = [["apple", "civic", "radar", "mango", "moon"],
            ["ice", "rotor", "winner", "level", "racer"],
            ["madam", "motor", "wow", "peep", "green"]];
            $total = 0;

    foreach($arr as $temp)
    {
        foreach($temp as $t)
        {
            if($t == strrev($t))
            {
                echo "$t is Palindrome.<br>";
                $total++;
            }
        }
    }
    echo "Total no. of palindrome = $total.";
?>