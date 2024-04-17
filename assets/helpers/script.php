<?php
//echo "Test script php";

// read the json file
$json_string = file_get_contents('dischi.json');
// turn it into an assoc array
$albums = json_decode($json_string, true);

//check the content of the discs
//var_dump($albums);

//print the json to out endpoint
header("Content-Type: application/json");
echo json_encode($albums);