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
$location[29]= 'Public' ;
$location[30] = 'Other ...';
define("locationTypes", $location);

const locationColor = [
    0 => '#7E3517' ,
    1 => 'red' ,
    2 => 'blue' ,
    3 => 'Tomato' ,
    4 => 'Orange' ,
    5 => 'DodgerBlue' ,
    6 => 'MediumSeaGreen' ,
    7 => 'Gray' ,
    8 => 'SlateBlue' ,
    9 => 'Violet' ,
    10 => 'Cyan' ,
    11 => 'Purple' ,
    12 => 'Lime' ,
    13 => 'green' ,
    14 => 'Magenta' ,
    15 => 'Aquamarine' ,
    16 => 'Olive' ,
    17 => 'Maroon' ,
    18 => 'Brown' ,
    19 => 'Yellow' ,
    20 => '#4B0150' ,
    21 => '#7575CF' ,
    22 => '#614051' ,
    23 => '#FF00FF' ,
    24 => '#E30B5D' ,
    25 => '#FFB6C1' ,
    26 => '#7F5A58' ,
    27 => '#872657' ,
    28 => '#FF4500' ,
    29 => '#8A4117' ,
    30 => '#8B8000' ,

];
