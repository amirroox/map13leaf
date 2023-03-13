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
function fetch_place(): false|array
{
    global $db_connection;
    $query = "SELECT * FROM locations";
    $stmt = $db_connection->query($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function delete_place($id): int
{
    global $db_connection;
    $query = 'DELETE from locations where id = ?';
    $stmt = $db_connection->prepare($query);
    $stmt->execute([$id]);
    return $stmt->rowCount();
}
function change_status($id): int
{
    global $db_connection;
    $query = 'UPDATE locations SET status = (1 - status) where id = ?';
    $stmt = $db_connection->prepare($query);
    $stmt->execute([$id]);
    return $stmt->rowCount();
}
function list_status($status = -1): false|array
{   // status ( 1 and 0 ) || null
    global $db_connection;
    if($status != -1) {
        $query = "Select * FROM locations where status = :status" ;
        $stmt = $db_connection->prepare($query);
        $stmt->execute([':status' => $status]);
    }
    else {
        $query = "Select * FROM locations" ;
        $stmt = $db_connection->prepare($query);
        $stmt->execute();
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}