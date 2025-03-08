<?php
    function insert($arr,$num,$number,$pos)
    {
        if($pos>=0)
        {
            if($pos>$num)
            {
                echo "can't insert at this position";
            }
            elseif($pos==$num)
            {
                $arr[$pos]=$number;
            }
            elseif($pos==0 || $pos>0 && $pos<$num)
            {
                for($i=$num;$i>$pos;$i--)
                {
                    $arr[$i]=$arr[$i-1];
                }
                $arr[$pos]=$number;
            }
        }
        else{
            echo "enter valid position";
        }

        return $arr;
    }

    //original array
    $OA = [1,2,3,4,5];

    //total number of ele 
    $NUM = count($OA);

    //number which is going to be inserted
    $NUMBER = $_POST["num"];

    //position at which number is inserted
    $POS = $_POST["pos"];

    echo "before insertion<br>";
    foreach($OA as $val)
    {
        echo $val." ";
    }

    $res = insert($OA,$NUM,$NUMBER,$POS);

    echo "<br><br>after insertion<br>";
    foreach($res as $val2)
    {
        echo $val2." ";
    }
?>