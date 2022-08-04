<?php

require_once "functions.php";

$db = connectToDatabase(); 
$data = fetchAllDatabase($db);

shuffle($data);

$oneRecord = array_splice($data, 0, 1);
?>

<html>
    <head>
        <title>Vinyl Collection</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <nav>
            <section>
                <div class="nav">
				    <a href="display.php">View</a>
				    <a href="addform.php">Add</a>
			    </div>
            </section>
        </nav>
        <section class= "title">
            <div>
                <h1>shuffle Vinyls</h1> 
            </div>
        </section>
        <main>
            <section class= "displayWidth">
                <div class= "records">
                <?php echo displayRecords($oneRecord);?>
                </div>
                <div class="next">
                    <a id = "nextbutton" href="shuffle.php">Next</a>
			    </div>
            </section>
        </main>
    </body>
</html>