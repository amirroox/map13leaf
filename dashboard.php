<?php

include_once "bootstrap/init.php";
$msg = null ;
if(isset($_GET['logout']) and $_GET['logout']==1) log_out();
if(isset($_SERVER['REQUEST_METHOD']) and $_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!login($_POST['email'],$_POST['password'])){
        $msg = massage_error_no_echo('The email or password is incorrect');
    }
}

if(is_login()) include_once "views/cp.php";
else include_once "views/signin.php";
