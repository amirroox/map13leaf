<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dieecho($msg): void
{
    echo "<div style='padding: 13px;
            display: inline-block;
            color: red;
            text-align: center;    
            background-color: yellow;
            border-radius: 20px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 26px;
            width: 80%;
            z-index: 1000;
'>$msg</div>";
    die();
}

#[NoReturn] function massage_error($msg): void
{
    echo "<div style='padding: 13px;
    display: inline-block;
    color: black;
    border-left: 5px solid #d00202; 
    background-color: #fba8d2;
    border-radius: 20px;
    font-size: 17px;
    width: 100%;
    '>$msg</div>";
    die();
}
function massage_success($msg): void
{
    echo "<div style='padding: 13px;
    display: inline-block;
    color: black;
    border-left: 5px solid #048f48; 
    background-color: #a9fba8;
    border-radius: 20px;
    font-size: 17px;
    width: 100%;
    '>$msg</div>";
}
function isAjax() :bool {
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
    {
        return true;
    }
    return false;
}

function site_url($url = ''): string
{
    return BASE_URL . $url ;
}