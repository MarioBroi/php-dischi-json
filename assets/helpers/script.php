<?php
//echo "Test script php";

//save in the variable discs all the array of dischi.json 
$discs = file_get_contents('dischi.json');

//check the content of the discs variable
var_dump($discs);