<?php

require_once "functions.php"; 

$db = connectToDatabase(); 
$data = fetchAllDatabase($db);

$deleteVinyl = $_POST['delete'];



sendDelete($db, $deleteVinyl);

header('Location: display.php');