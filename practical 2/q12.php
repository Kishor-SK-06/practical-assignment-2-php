<?php

    function validate_email($arr)
    {
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $va = [];

        foreach($arr as $email)
        {
            if(preg_match($pattern,$email))
            {
                $va[] = $email;
            }
        }

        return $va;
    }

    function check_uniqueness($arr)
    {
        $ua = [];

        foreach($arr as $value)
        {
            if(!in_array($value,$ua))
            {
                $ua[] = $value;
            }
        }

        return $ua;
    }

    $ARR = ['kp@gmail.com','ss@yahoo.com','as@outlook.com','invalid@','@kp@.com','kp@gmail.com','ss@yahoo.com'];

    echo "valids emails are<br><br>";
    $ve = validate_email($ARR);
    foreach($ve as $val)
    {
        echo $val. "<br>";
    }


    echo "<br><br>unique emails are<br><br>";
    $ue = check_uniqueness($ve);
    foreach($ue as $val)
    {
        echo $val. "<br>";
    }


    
?>