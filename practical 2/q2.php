<?php
    function find_triplets($arr,$nom)
    {
        //array to strore triplets
        $resulted_array = [];

        //used for resulted array index
        $k = 0;

        //this loop is used to treat each element as the first input of the triplet
        for($i=0;$i<$nom-2;$i++)
        {
            //this loop is used to treat each element as the second input of the triplet
            for($j=$i+1;$j<$nom-1;$j++)
            {
                //this loop is used to treat each element as the result of the triplet
                for($m=$j+1;$m<$nom;$m++)
                {
                    //condition to check the eligibility of the triplet
                    if($arr[$i]+$arr[$j] == $arr[$m])
                    {
                        //used to assign triplets values in resulted array
                        $resulted_array[$k++] = $arr[$i];
                        $resulted_array[$k++] = $arr[$j];
                        $resulted_array[$k++] = $arr[$m];
                    }
                }
            }
        }

        return $resulted_array;
    }


    $demo_array = [1,5,3,2];

    $no_of_members = count($demo_array);

    echo "display array<br><br>";
    foreach($demo_array as $arr_value)
    {
        echo $arr_value."<br>";
    }

    sort($demo_array);

    //calling the function to find triplets 
    $resulted_array = find_triplets($demo_array,$no_of_members);

    //count the number of members in resulted array to find no of elements
    $nomira= count($resulted_array);

    //finding the no of triplets
    $not = $nomira/3;

    echo "<br><br>total ".$not." triplets are present. They are<br><br>";
    $i =0;
    while($i<$nomira)
    {
        echo $resulted_array[$i++]." + ".$resulted_array[$i++]." = ".$resulted_array[$i++]."<br>";
    }
?>