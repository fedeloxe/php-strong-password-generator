<?php
function randomPassword($pass)
{
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;<>,.?/";
    $password = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $pass; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password);
}
