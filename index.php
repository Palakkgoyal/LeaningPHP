<?php
$insert = false;
if(isset($_POST['name'])){
    //Set Connection Variables
        $server = "localhost";
        $username = "root";
        $password = "";

        //Create a database connection
        $con = mysqli_connect($server, $username, $password);

        //Check for connection success
        if(!$con){
            die("Connection to this database failed due to : " . mysqli_connect_error());
        }

        //collect post variables
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $other = $_POST['other'];
        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `phone`, `email`, `other`, `dt`) VALUES ('$name', '$age', '$phone', '$email', '$other', current_timestamp());";

        //Execute the query
        if($con->query($sql) == true){
            //Flag for successful insertion
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        //Close the database connection
        $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>Travel Form Project</title>
</head>
<body>
    <img src="bg.jpg" alt="IIT kharagpur">
    <div class="container">
            <h1>Welcome to IIT kharagpur US trip form</h1>
            <p>Enter your details and submit this form to confirm your participation in this trip</p>
            <?php
            if($insert){
                echo "<p class='submitMsg'>Thank you for submiting your form. We are happy to see you joining us on the US trip</p>";
            }
            ?>
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="number" name="age" id="age" placeholder="Enter you age" max="27" min="18">
                <input type="tel" name="phone" id="phone" placeholder="Enter your Number">
                <input type="email" name="email" id="email" placeholder="Enter your Email">
                <!-- <label for="female">Female</label>
                <input type="radio" name="gender" id="female">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male">
                <label for="NotPreferred">Not Preferred to tell</label>
                <input type="radio" name="gender" id="NotPreferred"> -->
                <textarea name="other" id="other" cols="30" rows="10">Some More About You...</textarea>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </form>


            <script src="index.js"></script>
    </div>
</body>
</html>