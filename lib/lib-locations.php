<?php

function addToMap($array): bool
{
    global $db_connection;
    $queryCheck = "Select id from locations where title = ? ";
    $check = $db_connection->prepare($queryCheck);
    $check->execute([$array['name_place']]);
    $test = (bool) $check->rowCount();
    if($test) {
        return false ; //not Added
    }
    else {
        $query = "INSERT INTO locations (title, lat, lng, type) VALUES (? , ? , ? , ?)";
        $stmt = $db_connection->prepare($query);
        $stmt->execute([$array['name_place'], $array['lat'], $array['lng'], $array['Type_place']]);
        return true ;  // Added
    }
}

function active_place(): false|array
{
    global $db_connection ;
    $query = 'SELECT * FROM locations where status = 1';
    $stmt = $db_connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function search_location($keyup , $limit=5): false|array
{
    global $db_connection;
    $query = "SELECT * FROM locations where title LIKE CONCAT('%',?,'%') and status = 1 LIMIT $limit;" ;
    $stmt = $db_connection->prepare($query);
    $stmt->execute([$keyup]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}