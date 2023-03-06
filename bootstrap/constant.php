<?php

define("MAIN_DIR", $_SERVER['DOCUMENT_ROOT']);  //Local Disk => ' D://... '
const BASE_URL = "http://localhost:63342/Maps13/" ;  // Server Disk

$location = [
    1 => 'Coffee Shop' ,
    2 => 'Restaurant' ,
    3 => 'Hospital' ,
    4 => 'Shop' ,
    5 => 'Boutique' ,
    6 => 'Hairdressers' ,
    7 => 'Library' ,
    8 => 'Dock' ,
    9 => 'School' ,
    10 => 'Water Closet' ,
    11 => 'Airport' ,
    12 => 'University' ,
    13 => 'Park' ,
    14 => 'Garden' ,
    15 => 'Graveyard' ,
    16 => 'Religious place' ,
    17 => 'Police station' ,
    18 => 'Fire station' ,
    19 => 'GameNet - ComputerLab' ,
    20 => 'Strip Club - Cabaret' ,
    21 => 'Drugstore' ,
    22 => 'Museum' ,
    23 => 'Tower - Business Apartment' ,
    24 => 'Zoo' ,
    25 => 'Cinema' ,
    26 => 'Swimming Pool' ,
    27 => 'Stadium' ,
    28 => 'Station' ,
    29 => 'Bank' ,

];
sort($location);
$location[30]= 'Public' ;
$location[31] = 'Other ...';
define("locationTypes", $location);

