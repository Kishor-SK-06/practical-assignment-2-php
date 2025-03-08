<?php
    for($i = 1; $i <= 5; $i++)
    {
        for($j = $i; $j > 1; $j--)
        {
            echo $j;
        }

        for($j = 1; $j <= (5 - $i + 1); $j++)
        {
            echo $j;
        }
        echo "<br>";
    }
?>