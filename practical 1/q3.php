<?php
    $amount = $_POST["number"];
    $notes = [500, 100, 50, 20, 10, 1];
    $result = [];

    foreach ($notes as $note) 
    {
        if ($amount >= $note) 
        {
            $count = 0;
            while ($amount >= $note) 
            {
                $amount = $amount - $note;
                $count++;
            }
        $result[$note] = $count;
        }
    }

    foreach (array_keys($result) as $note) 
    {
        $count = $result[$note];
        echo $count . " note of " . $note . "<br>";
    }

    
?>