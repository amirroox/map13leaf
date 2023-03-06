<?php

function addToMap($array): int
{
    global $db_connection;
    $query = "INSERT INTO locations (title, lat, lng, type) VALUES (? , ? , ? , ?)" ;
    $stmt = $db_connection->prepare($query);
    $stmt -> execute([$array['name_place'] ,$array['lat'] ,$array['lng'] ,$array['Type_place']  ]);
    return $stmt->rowCount();
}
