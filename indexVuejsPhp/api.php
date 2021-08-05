<?php
include __DIR__ . '/database.php';
header('Content-Type: application/json');
if ( !empty($_GET['genre']) ) {
    $genre = $_GET['genre'];
    $categories = [];
    foreach($database as $val){
        if(strtolower($val['genre']) == strtolower($genre) ){
            $categories [] = $val;
        }
    }
    $database = $categories;
}
echo json_encode($database);
?>