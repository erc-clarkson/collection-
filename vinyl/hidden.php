<?php

require_once "functions.php";

$submitedData = validatePost($_POST);

redirect($submitedData); 

$db = connectToDatabase(); 

$getArtistName = $_POST['artist-name'];
$getRecordName = $_POST['record-name'];
$getRecordSize = $_POST['record-size'];
$getRecordImage = $_POST['images'];


sendData($db, $getArtistName, $getRecordName, $getRecordSize, $getRecordImage);

?>