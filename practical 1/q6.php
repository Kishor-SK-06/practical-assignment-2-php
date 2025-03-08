<?php
    $phy = $_POST["physics"];
    $chem = $_POST["chemistry"];
    $bio = $_POST["biology"];
    $maths = $_POST["mathematics"];
    $comp = $_POST["computer"];

    $marks = [$phy,$chem, $bio, $maths, $comp];

    $total_marks = array_sum($marks);

    $percentage = ($total_marks / (5 * 100)) * 100;

    echo "Percentage: " . $percentage . "%\n";
    
    if ($percentage >= 90) 
    {
        echo "Grade: A";
    } 
    elseif ($percentage >= 80) 
    {
        echo "Grade: B";
    } 
    elseif ($percentage >= 70) 
    {
        echo "Grade: C";
    } 
    elseif ($percentage >= 60) 
    {
        echo "Grade: D";
    } 
    elseif ($percentage >= 40) 
    {
        echo "Grade: E";
    } 
    else 
    {
        echo "Grade: F";
    }
    
?>