<?php

//link database to page 
$db = new PDO('mysql:host=db; dbname=Vinyl', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `record-name`, `artist-name`, `record-size` FROM `records`;");
$query->execute();

$data = $query->fetchAll();

require_once "functions.php";
?>

<html>
    <head></head>
    <body>
        <section>
            <div>
              <?php echo displayRecords($data); ?>
            </div>
        </section>
    </body>
</html>