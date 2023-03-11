<?php

function is_login() :bool
{
    if (isset($_SESSION['login']) and  $_SESSION['login'] == 1) return true;
    return false;
}
function log_out(): void
{
    unset($_SESSION['login']);
}
function login($email , $pass) :bool{
    global $admins ;
    if (array_key_exists($email,$admins) and password_verify($pass , $admins[$email]))
    {
        return $_SESSION['login'] = true ;
    }
    return false;
}
