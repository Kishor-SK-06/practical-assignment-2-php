<html>
    <body>
        <?php
            $number = $_POST["number"];

            switch ($number) 
            {
                case 1:
                    echo"it's monday";
                    break;

                case 2:
                    echo "it's tuesday";
                    break;
                
                case 3:
                    echo "it's wednesday";
                    break;

                case 4:
                    echo "it's thursday";
                    break;
                
                case 5:
                    echo "it's friday";
                    break;

                case 6:
                    echo "it's saturday";
                    break;

                case 7:
                    echo "it's sunday";
                    break;
                
                default:
                    echo "enter a valid number!";
            }
        ?>
    </body>
</html>