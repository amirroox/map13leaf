<?php

function addToMap($array): int
{
    global $db_connection;
    $queryCheck = "Select id from locations where title = ? ";
    $check = $db_connection->prepare($queryCheck);
    $check->execute([$array['name_place']]);
    if(!$check->rowCount()) {
        $query = "INSERT INTO locations (title, lat, lng, type) VALUES (? , ? , ? , ?)";
        $stmt = $db_connection->prepare($query);
        $stmt->execute([$array['name_place'], $array['lat'], $array['lng'], $array['Type_place']]);
        return $stmt->rowCount() ;  // Added
    }
    else {
        return 0 ; //not Added
    }
}