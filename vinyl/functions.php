<?php

/**
 * To access aarrays from database 
 *
 * @param array $records
 * @return array associative array = $listResults 
 */
function displayRecords(array $records) {
    $result = '';
    foreach($records as $record){
        $result .= 
        '<div>' .
        '<h3>' . $record['record-name'] . '</h3>' .  
        '<h4>' . $record['artist-name'] . '</h4>' . 
        '<p>' . $record['record-size'] . '</p>' . 
        '</div>';
    }
    return $result;
} 

