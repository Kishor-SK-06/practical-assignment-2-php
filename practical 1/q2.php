<html>
    <head>
        <title>question 2</title>
        <style>
            table{
                padding: 10;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table border="2px solid black">
            <tr>
                <th>numbers which are only divisible by 11</th>
                <th>numbers which are only divisible by 17</th>
                <th>numbers which are divisible by both 11 and 17</th>
            </tr>

            <tr>
                <td>
                    <?php
                    for( $i = 200; $i <= 500; $i++ )
                    {
                        if($i%11== 0)
                        {
                            echo $i."<br>";
                        }
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for( $i = 200; $i <= 500; $i++ )
                    {
                        if($i%17== 0)
                        {
                            echo $i."<br>";
                        }
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for( $i = 200; $i <= 500; $i++ )
                    {
                        if($i%11== 0 && $i%17== 0)
                        {
                            echo $i."<br>";
                        }
                    }
                    ?>
                </td>
            </tr>
            
        </table>
    </body>
</html>