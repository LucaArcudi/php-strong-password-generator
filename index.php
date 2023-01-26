<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <header>
        <h1>Password Generator</h1>
    </header>

    <main>
        <form action="./index.php" method="GET">
            <label for="password-length">Lunghezza password: </label>
            <input type="number" id="password-length" name="password-length">
            <button type="submit">INVIA</button>
        </form>

        <?php

        $passwordLength = $_GET["password-length"];

        $password = "";
        $characters = "abcdABCD1234&%!#";

        while (strlen($password) <= $passwordLength - 1) {



            $password .= $characters[random_int(0, strlen($characters))];
        }

        echo $password;

        ?>

    </main>
</body>



</html>