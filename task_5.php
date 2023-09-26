<?php

function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}

echo "Generated Password is: " . generatePassword(12) . "\n";


