<?php
function getRandomPassword()
{
    $passwordLength = $_GET["password-length"];

    $password = "";
    $characters = "abcdABCD1234&%!#";

    while (strlen($password) <= $passwordLength - 1) {



        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }

    return $password;
}
