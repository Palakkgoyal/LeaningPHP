<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <div class="container">
        <!-- This is my first PHP file -->
        <br>
        <?php
        define('pi', 3.14); //constants are made using pi
        echo pi;
        echo "<br>";

        //variables are created using $ sign
        $var1 = 2;
        $var2 = 1;

        // $var2 += 3;

        //echo will print var2 as html
        echo $var2;

        //ASSIGNMENT OPERATOR

        // echo var_dump($var1 == $var2);
        // echo "<br>";

        //COMPARISON OPERATORS

        // echo var_dump($var1 != $var2);
        // echo "<br>";
        // echo var_dump($var1 >= $var2);
        // echo "<br>";
        // echo var_dump($var1 <= $var2);
        // echo "<br>";
        // echo $var1++; //2 => 3
        // echo $var1--; //3 => 2
        // echo ++$var1; //3
        // echo --$var1; //2
        $myVar = (true xor true);

        //var_dump is used to get the type of a variable
        echo var_dump($myVar);
        ?>
    </div>
</body>
</html>