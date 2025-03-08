<?php
    $j = 0;

    for($i = 1; $i <= 5; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo $j;
        }
        $j--;

        if($j == $i)
        {
            for($j; $j >= 1; $j--)
            {
                echo $j;
            }
        }
        echo "<br>";
    }
?>