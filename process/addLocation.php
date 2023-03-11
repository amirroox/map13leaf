<?php

include '../bootstrap/init.php';

if(!isAjax()) {
    dieecho('Invalid Request');
}

// Request Is Ajax and Continue
$data = $_POST ;  // Simple Variable
/* Validate Data */
if (mb_strlen($data['name_place']) < 3) {
    massage_error('Please choose more than 5 characters for the name');
}
else if (($data['Type_place'] < 0) || ($data['Type_place'] > 30) ) {
    massage_error('Please select a category');
}
else if(($data['lat'] < -90) || ($data['lat'] > 90)) {
    massage_error('Please enter the correct latitude');
}
else if(($data['lng'] < -180) || ($data['lng'] > 180)) {
    massage_error('Please enter the correct longitude');
}
else if(!addToMap($data)) {
    massage_error('Please choose another name for the place');
}
else {
    massage_success('The location has been added to the map and is being checked');
}
