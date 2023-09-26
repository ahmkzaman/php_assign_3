<?php
function generatePassword($length)
{
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';
    for ($i = 0; $i < $length; $i++) {

        $randomIndex = rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }

    echo $password;
}

generatePassword(12);
