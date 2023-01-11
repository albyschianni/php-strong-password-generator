<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $length = isset($_GET["password"]); 

        require 'helper.php';

        session_start();
    ?>

</head>
<body>
    <h1>
        Password Generator
    </h1>

    <form method="get">
        <label for="pass-lenght">Lunghezza Password</label>
        <input type="number" name="password">
        <input type="submit" value="Generate">
    </form>

    <?php

        

        if (isset($_GET["password"])) {
            $password = generatePassword($_GET["password"]);

            
            if ($password){
            
                $_SESSION["password"] = $password;

                header('location: ./passwordPage.php');
            } 

            // echo $password;
        }


    ?>

</body>
</html>