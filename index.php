<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $length = $_GET["password"];
     
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

        require 'helper.php';

        if (isset($_GET["password"])) {
            $password = generatePassword($_GET["password"]);
            echo $password;
        }


    ?>

</body>
</html>