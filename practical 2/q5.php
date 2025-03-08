<?php
    function find($arr,$n)
    {
        $lcheck = true;
        $rcheck = true;

        $es=true;

        for($i=0;$i<$n;$i++)
        {
            $state = true;

            echo "<br><br>check for left side<br>";
            for($j=0;$j<$i;$j++)
            {
                if($state == false)
                {
                    $lcheck = false;
                    break;
                }
                echo "i = ".$arr[$i]."<br>";
                echo "left_j = ".$arr[$j]."<br>";

                if($arr[$j]<$arr[$i])
                {
                    $lcheck = true;
                }
                else
                {
                    $lcheck = false;
                    $state = false;
                }
            }

            echo "<br><br>check for right side<br>";
            for($j=$i+1;$j<$n;$j++)
            {
                if($state == false)
                {
                    $rcheck = false;
                    break;
                }
                echo "i = ".$arr[$i]."<br>";
                echo "right_j = ".$arr[$j]."<br>";
                
                if($arr[$j]>$arr[$i])
                {
                    $rcheck = true;
                }
                else
                {
                    $rcheck = false;
                    $state = false;
                }

                
            }

            if($lcheck == true && $rcheck == true)
            {
                $ele = $arr[$i];
                echo "<br><br>element who fulfill both the conditions: ".$ele;
                $es = true;
                break;
            }
            else
            {
                $es = false;
            }
            echo "<br>";
        }

        if($es == false)
        {
            echo "no such element is present";
        }
    }

    $dummy_array = [19,11,34,55,45,78,66,98];
    $N = count($dummy_array);

    find($dummy_array,$N);
?>