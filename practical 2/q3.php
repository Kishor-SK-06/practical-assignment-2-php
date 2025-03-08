<?php
    function struct_array($arr,$num)
    {
        $sa = [];

        //sorts the array 
        for($i=0;$i<$num;$i++)
        {
            for($j=$i+1;$j<$num;$j++)
            {
                if($arr[$i]>$arr[$j])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }

        //variable use to store values of structured array
        $si = 0;
        $li = $num-1;
        $i = 0;
        $limit = intdiv($num,2);
        echo $limit;

        //special var to store middle element if odd numbers of members in original array
        $mid = $limit;

        while($limit!=0)
        {
            $sa[$i++] = $arr[$li--];
            $sa[$i++] = $arr[$si++];
            $limit--;
        }

        //if there is odd number of members this code place the middle element at last 
        if($num%2!=0)
        {
            $sa[$num]=$arr[$mid];
        }

        return $sa;

    }

    $demo_array = [1,9,2,6,3,4,5,8,7];

    $no_of_members = count($demo_array);

    echo "display array<br><br>";
    foreach($demo_array as $arr_value)
    {
        echo $arr_value." ";
    }

    $struct_array = struct_array($demo_array,$no_of_members);

    echo "<br><br>displaying array after structuring<br><br>";

    foreach ($struct_array as $array_var) 
    {
        echo $array_var." ";
    }
?>
