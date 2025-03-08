<?php
    function rain_water($arr,$n)
    {
        $ra = [];
        
        for($i=0;$i<$n;$i++)
        {
            if($arr[$i]==3 || $arr[$i]>3)
            {
                $ra[$i] = 0;
            }
            elseif($arr[$i]<3 && $arr[$i]>=0)
            {
                $ra[$i] = 3-$arr[$i];
            }
            
        }

        return $ra;
    }

    $N = $_POST["noc"];

    $number = $_POST["nob"];
    $block_arr = explode(" ",$number);

    $res = rain_water($block_arr,$N);


    //displaying num of blocks 
    echo "no of blocks in each column:      [";
    foreach($block_arr as $value1)
    {
        echo $value1. " ";
    }
    echo "]";


    //displaying trapped water at the place where no blocks rae present
    echo "<br><br>trapped water in the column:      [";
    foreach($res as $value2)
    {
        echo $value2. " ";
    }
    echo "]";

    
    //count the total num of trapped water
    
    $tn = 0;

    for($i=0;$i<$N;$i++)
    {
        $tn += $res[$i];
    }
    echo "<br><br>total number of trapped water = ".$tn;
    
?>