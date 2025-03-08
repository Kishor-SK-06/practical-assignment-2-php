<?php
$array = [0, 1, 2, 0, 1, 2];

$count0 = 0;
$count1 = 0;
$count2 = 0;

foreach ($array as $value) 
{
    if ($value == 0) 
    {
        $count0++;
    } 
    elseif ($value == 1) 
    {
        $count1++;
    } 
    elseif ($value == 2) 
    {
        $count2++;
    }
}

if ($count0 == $count1 && $count1 == $count2) 
{
    echo "The array has equal numbers of 0's, 1's, and 2's.";
} 
else 
{
    echo "The array does NOT have equal numbers of 0's, 1's, and 2's.";
}
?>
