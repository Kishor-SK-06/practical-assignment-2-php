<html>
    <head>
        <title>question 1</title>
    </head>
    <body>
        <?php
            $first = $_POST["no1"];
            $second = $_POST["no2"];
            $third = $_POST["no3"];
            $fourth = $_POST["no4"];
            $fifth = $_POST["no5"];

            $number = [$first,$second,$third,$fourth,$fifth];

            echo"the maximum number among: ".$first.", ".$second.", ".$third.", ".$fourth.", ".$fifth."<br>";
            echo" = ".max($number);
        ?>
    </body>
</html>