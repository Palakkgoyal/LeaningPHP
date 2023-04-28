<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic of PHP</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(175, 161, 161);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        hey there
        <?php
        //if else statements
        $age = 17;
        if($age > 18){
            echo "You can go to party";
        }
        else if($age === 17){
            echo "On permission you can go only";
        }
        else{
            echo "You can not go to the party";
        }

        //array is made using array keyword
        $langs = array("python", 34, 2.5, true);
        //you can't simply print the whole array, this is wrong and will throw error 
        // echo $langs;

        //Instead you can print them according to their index
        echo $langs[0];

        //count method is used to get the length of array
        echo count($langs);

        //while loop in PHP
        $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        //do while loop
        $b = 0;
        do{
            echo "<br> This is a do while loop: ";
            echo $b;
            $b++;
        } while($b < 3);

        //for loop
        for($c = 0; $c < 5; $c++){
            echo "<br> This is written using for loop ";
            echo $c;
        }

        //for each loop
        foreach ($langs as $lang) {
            echo "<br>";
            echo $lang;
        }

        //functions in PHP
        function printWhatever($num) {
            echo "<br>Printing numbers using functions: ";
            echo $num;
        }

        printWhatever(false);

        //strings in PHP
        $stree = "This is a string";
        //strlen() is a function used to get the length of a string
        $len = strlen($stree);

        echo "<br>The length of string is: ";
        echo $len;

        //concatenate string using dot(.)
        echo "<br>This is a concatenated string using (.) " . $len . " Thank you";

        //str_word_count() is a function used to count the number of words in a string
        echo "<br>The number of words in the string '" . $stree . "' is = ";
        echo str_word_count($stree); 

        //strrev() is used to reverse the string
        echo "<br>The reversed string is: " . strrev($stree);

        //strpos() is used to get the first index of a substring
        echo "<br>The first postion of 'is' in '". $stree . "' is: " . strpos($stree, 'is');

        //str_replace() is used to replace a substring in a string
        echo "<br> The replaced string is: " . str_replace("is", "at", $stree);
        ?>
    </div>
</body>
</html>