<?php
    $n = 1;

    for($i = 1; $i <= 5; $i++)
    {
        for($j = 5; $j >= 1; $j--)
        {
            if($j == $n)
            {
                echo "*";
                $n++;
            }
            else
                echo $j;
        }
        echo "<br>";
    }
?>