<?php
    function check($arr)
    {
        $state = true;
        $n = count($arr);
        $sample = null;

        for($i=0;$i<$n;$i++)
        {
            $sample = $arr[$i];

            $ascii = ord($sample);

            if(!(($ascii>=65 && $ascii <=90) || ($ascii>=97 && $ascii <=122) || $ascii==32))
            {
                $state = false;
                break;
            }
        }

        return $state;
    }

    $ARR = ['kaushal',9,"pandey",'mango'];
    $res = check($ARR);
    if(!$res)
    {
        echo "not all members are string";
    }
    else
    {
        echo "all members are string";
    }
?>