<?php

include_once "../bootstrap/init.php";

if(!isAjax()) {
    dieecho('Invalid');
}

$search = search_location($_POST['keyup']);
foreach ($search as $key => $value) {
    echo "<div onclick='go_to_place(".$value['lat'].",".$value['lng'].")'>";
    echo "<span class='text_search'>".$value['title']."</span>";
    echo "<span class='category_search' style='background-color:" . locationColor[$value['type']]. "'>"
        .locationTypes[$value['type']]
        ."</span>" ;
    echo '</div>';
}
