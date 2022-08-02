<?php

require_once "functions.php";

$db = connectToDatabase(); 
$data = fetchAllDatabase($db);

?>

<html>
    <head>
    <title>Vinyl Collection</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <section class= "title">
            <div>
                <h1>Your Vinyls</h1> 
            </div>
        </section>
        <main>
            <section>
            <div class= "records">
              <?php echo displayRecords($data);?>
              </section>
            </div>
        </main>
    </body>
</html>