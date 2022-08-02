<?php
/**
 * To connect to the database
 *
 * @param array 
 * @return array associative array = $db
 */
function connectTodatabase(){
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
function fetchAlldatabase($db){
    $query = $db->prepare("SELECT `record-name`, `artist-name`, `record-size` FROM `records`;");
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
            '<h3>' . $record['artist-name'] . '</h3>' .  
            '<h4>' . $record['record-name'] . '</h4>' . 
            '<p>' . $record['record-size'] . '</p>' . 
            '</section>' .
            '</div>';
        }
        return $result;
    }
} 

