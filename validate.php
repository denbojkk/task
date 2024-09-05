<?php

require 'core.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validator = new UserValidator();

    $isEmailValid = $validator->validateEmail($email);
    $isPasswordValid = $validator->validatePassword($password);

    echo "Email: " . ($isEmailValid ? "Poprawne" : "Niepoprawne") . "<br>";
    echo "Hasło: " . ($isPasswordValid ? "Poprawne" : "Niepoprawne") . "<br>";
}

?>