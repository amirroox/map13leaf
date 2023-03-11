<?php

session_start();
include_once "constant.php";
include_once "config.php";
include_once MAIN_DIR."/lib/helper.php";

/* Init DataBase ::PDO */
try {
    $db_connection = new PDO(
        "mysql:dbname={$database_config['db']};host={$database_config['host']}",
        $database_config['user'],
        $database_config['pass']
    );
}
catch (PDOException $e){
    dieecho("Connection Failed : " . $e->getMessage());
}

include_once MAIN_DIR."/lib/lib-panel.php";
include_once MAIN_DIR."/lib/lib-locations.php";