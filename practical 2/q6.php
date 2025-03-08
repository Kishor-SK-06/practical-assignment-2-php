<?php

    function struct_array($arr,$n)
    {
        for($i=0;$i<$n-1;$i++)
        {
            if($i%2==0)
            {
                if($arr[$i]>$arr[$i+1])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1] = $temp;
                }
            }
            else
            {
                if($arr[$i]<$arr[$i+1])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1] = $temp;
                }   
            }
        }

        return $arr;
    }

    $ARR = [4, 3, 7, 8, 6, 2, 1];
    $N = count($ARR);

    echo "original array<br><br>";
    foreach ($ARR as $val) 
    {
        echo $val. " ";
    }

    //calling function to struct array
    $res = struct_array($ARR,$N);

    echo "<br><br>displaying array after structuring<br><br>";
    foreach ($res as $val) 
    {
        echo $val. " ";
    }

?>