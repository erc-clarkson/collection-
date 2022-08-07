<?php

require_once "functions.php";

$submitedData = validatePost($_POST);

redirect($submitedData); 

$db = connectToDatabase(); 

$getArtistName = $_POST['artist-name'];
$getRecordName = $_POST['record-name'];
$getRecordType = $_POST['record-type'];
$getRecordImage = $_POST['images'];


sendData($db, $getArtistName, $getRecordName, $getRecordType, $getRecordImage);

?>