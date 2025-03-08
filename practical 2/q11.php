<?php
    function filter($arr,$n)
    {
        $ra = [];

        foreach($arr as $value)
        {
            if(!in_array($value,$ra))
            {
                $ra[] = $value;
            }
        }

        return $ra;
    }

    $ARR = [1,2,3,4,5,1,2,3,4,5];
    $N = count($ARR);

    echo "original array<br>[";
    foreach($ARR as $val1)
    {
        echo $val1." ";
    }
    echo "]";

    $res = filter($ARR,$N);

    echo "<br><br>filtered array<br>[";
    foreach($res as $val2)
    {
        echo $val2." ";
    }
    echo "]";
?>