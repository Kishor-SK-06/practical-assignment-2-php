<html>
    <head>
        <title>question 1</title>
        <style>
            form{
                border: 5px solid black;
                border-radius: 5%;
                background-color: lightsalmon;  
                height: 300px;
                width: 300px;
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <form action="q1.php" method="post" enctype="multipart/form-data">
            <h3>input the numbers</h3><br>

            <label for="no1">1st: </label>
            <input type="number" name="no1" id="no1"><br><br>

            <label for="no2">2nd: </label>
            <input type="number" name="no2" id="no2"><br><br>

            <label for="no3">3rd: </label>
            <input type="number" name="no3" id="no3"><br><br>

            <label for="no4">4th: </label>
            <input type="number" name="no4" id="no4"><br><br>

            <label for="no5">5th: </label>
            <input type="number" name="no5" id="no5"><br><br>

            <input type="submit" style="background-color:lightgreen;">
        </form>
    </body>
</html>