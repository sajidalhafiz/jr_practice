<?php

// Function to validate email
function validateEmail($email) {
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    // Check if email domain is valid
    $domain = explode('@', $email)[1];
    if (!checkdnsrr($domain, 'MX')) {
        return false;
    }

    return true;
}

// Function to validate password
function validatePassword($password) {
    // Validate password length
    if (strlen($password) < 8) {
        return false;
    }

    // Validate password strength using regex pattern
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]+$/";
    if (!preg_match($pattern, $password)) {
        return false;
    }

    return true;
}

?>