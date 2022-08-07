<?php
/**
 * To connect to the database
 *
 * @param array 
 * @return array associative array = $db
 */
function connectToDatabase(): PDO{
    $db = new PDO('mysql:host=db; dbname=Vinyl', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db; 
}

/**
 * To fetch all from the database 
 *
 * @param array 
 * @return array = $data 
 */
function fetchAllDatabase(PDO $db): array{
    $query = $db->prepare("SELECT `id`, `record-name`, `artist-name`, `record-size`, `images` FROM `records` WHERE `delete` = 0 ORDER BY `artist-name` ASC;");
    $query->execute();
    $data = $query->fetchAll();
    return $data;
}

/**
 * To access aarrays from database 
 *
 * @param array $records
 * @return array associative array = $listResults 
 */
function displayRecords(array $records): string {
    if (count($records) == 0){
        return 'No Records';
    } else {
        $result = '';
        foreach($records as $record){
            $result .= 
            '<div>' .
            '<section class ="recordsContent">' .
            '<img src="' . $record['images'] . '"/>' . 
            '<h3>' . $record['artist-name'] . '</h3>' .  
            '<h4>' . $record['record-name'] . '</h4>' . 
            '<p>' . $record['record-size'] . '</p>' . 
            '</section>' .
            '<form action="hiddendelete.php" method="POST">' .
            '<input type= "hidden" name="delete" value="' . $record['id'] . '"/>' .
            '<button>delete</button>' .
            '</form>' .
            '</div>';
        }
        return $result;
    }
} 

/**
 * Validate input from addform page 
 *
 * @param array $input
 * @return bool False if the fields are left empty. 
 */
function validatePost(array $input) {
    if((!isset($input['artist-name']) || $input['artist-name'] === '')
    || (!isset($input['record-name']) || $input['record-name'] === '')
    || (!isset($input['record-size']) || $input['record-size'] === '')
    || (!isset($input['images']) || $input['images'] === '')) 
        { return false;
    } return true; 
}

/**
 * if statement, redirect from the form page. 
 *
 * @param array $input
 * @return void sends to different locations
 */
function redirect($input) {
    if ($input == false){
        header('Location: addform.php?error= All Fields Required');
    } else {
        header('Location: index.php');
    }
} 

/**
 * Inputting information to db
 *
 * @param array $db & the variables from the form field
 * @return array into database. 
 */
function sendData(PDO $db, string $getArtistName, string $getRecordName, string $getRecordSize) {
    $query = $db->prepare("INSERT into `records` (`record-name`, `artist-name`, `record-size`) VALUES (:getRecordName, :getArtistName, :getRecordSize);");
    $query->bindParam(':getArtistName', $getArtistName);
    $query->bindParam(':getRecordName', $getRecordName);
    $query->bindParam(':getRecordSize', $getRecordSize);
    $query->execute();
}

/**
 * Sending data to db from delete button 
 *
 * @param array $db & the input from the delete button 
 * @return int returns int value to the delete field in db 
 */
function sendDelete(PDO $db, int $input) {
    $query = $db->prepare("UPDATE `records` SET `delete` = 1 WHERE `id` = :id;");
    $query->bindParam(':id', $input);
    $query->execute();
}
