<?php
    $month = $_POST["number"];

    switch ($month) 
    {
        case ($month > 12 || $month < 0):
            echo "enter a valid month number";
            break;

        case 2:
            echo "28 days";
            break;

        case ($month%2 != 0 && $month <= 7 || $month%2 == 0 && $month > 7):
            echo "31 days";
            break;

        case ($month%2 == 0 && $month <= 7 || $month%2 != 0 && $month > 7):
            echo "30 days";
            break;
    }
?>