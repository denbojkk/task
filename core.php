<?php

class UserValidator {

    public function validateEmail(string $email): bool {
        $pattern = '/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/';
        
        return (bool)preg_match($pattern, $email);
    }

    public function validatePassword(string $password): bool {
        if (strlen($password) < 8) {
            return false;
        }
        
        $hasUpperCase = preg_match('/[A-Z]/', $password);
        $hasLowerCase = preg_match('/[a-z]/', $password);
        $hasDigit = preg_match('/[0-9]/', $password);
        $hasSpecialChar = preg_match('/[\W_]/', $password);
        
        return $hasUpperCase && $hasLowerCase && $hasDigit && $hasSpecialChar;
    }
}

?>