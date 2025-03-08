<?php
    function rearrange_array($arr,$n)
    {
        $minIndex = 0;
        $maxIndex = 0;

        for($i=1;$i<$n;$i++)
        {
            if($arr[$i]<$arr[$minIndex])
            {
                $minIndex = $i;
            }
            if($arr[$i]>$arr[$maxIndex])
            {
                $maxIndex = $i;
            }
        }

        //swap the smallest element to first element
        $temp = $arr[0];
        $arr[0] = $arr[$minIndex];
        $arr[$minIndex] = $temp;

        //swap the largest element to last element
        $temp = $arr[$n-1];
        $arr[$n-1] = $arr[$maxIndex];
        $arr[$maxIndex] = $temp;

        return $arr;
    }

    //creating an array
    $demo_array = array(32,76,11,98,36,45);

    //counting the total no of members
    $no_of_members = count($demo_array);

    echo "displaying the original array<br><br>";
    
    foreach ($demo_array as $array_var) 
    {
        echo $array_var."<br>";
    }

    //call function to sort array
    $sorted_array = rearrange_array($demo_array,$no_of_members);

    echo "<br><br>displaying array after rearranging<br><br>";

    foreach ($sorted_array as $array_var) 
    {
        echo $array_var."<br>";
    }
?>