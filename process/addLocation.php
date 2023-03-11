<?php

include '../bootstrap/init.php';

if(!isAjax()) {
    dieecho('Invalid Request');
}

// Request Is Ajax and Continue
$data = $_POST ;  // Simple Variable
/* Validate Data */
if (mb_strlen($data['name_place']) < 5) {
    massage_error('Please choose more than 5 characters for the name');
    die();
}
if (($data['Type_place'] < 0) || ($data['Type_place'] > 31) ) {
    massage_error('Please select a category');
    die();
}
if(($data['lat'] < -90) || ($data['lat'] > 90)) {
    massage_error('Please enter the correct latitude');
    die();
}
if(($data['lng'] < -180) || ($data['lng'] > 180)) {
    massage_error('Please enter the correct longitude');
    die();
}
addToMap($data);
massage_success('The location has been added to the map. <br> and is being checked');
return $msg = 'OK' ;