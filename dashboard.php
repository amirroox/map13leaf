<?php
$location_list=null;

include_once "bootstrap/init.php";
$msg = null ;
if(isset($_GET['logout']) and $_GET['logout']==1) log_out();
if(isset($_SERVER['REQUEST_METHOD']) and $_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!login($_POST['email'],$_POST['password'])){
        $msg = massage_error_no_echo('The email or password is incorrect');
    }
}

if(!is_login()) include_once "views/signin.php" ;
else {
    $location_list = fetch_place() ;
    if(isset($_GET['del_id']) and is_numeric($_GET['del_id'])) {
        delete_place($_GET['del_id']);
        header('Location:'.BASE_URL.'dashboard.php');
    }
    if(isset($_GET['chg_status']) and is_numeric($_GET['chg_status'])) {
        change_status($_GET['chg_status']);
        header('Location:'.BASE_URL.'dashboard.php');
    }
    if(isset($_GET['status']) and is_numeric($_GET['status'])) {
        if($_GET['status'] < 0 ) header('Location:'.BASE_URL.'dashboard.php');
        $location_list = list_status($_GET['status']);
    }
    include_once "views/cp.php";
}
