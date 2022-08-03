<?php

require_once "functions.php";

$db = connectToDatabase(); 

$submitedData = validatePost($_POST);

$getArtistName = $_POST['artist-name'];
$getRecordName = $_POST['record-name'];
$getRecordSize = $_POST['record-size'];

sendData($db, $getArtistName, $getRecordName, $getRecordSize);

redirect($_POST); 
?>