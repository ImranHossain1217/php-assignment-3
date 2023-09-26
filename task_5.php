<?php
// Task 5: Password Generator

function generatePassword($length)
{
    $characters ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = substr(str_shuffle($characters), 0, $length);
    return $password;
}
$length = 12;
$newPassword = generatePassword($length);
echo "Generated Password: {$newPassword}";

?>