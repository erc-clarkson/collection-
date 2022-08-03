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
        <nav>
            <section>
                <div>
				<a class="pageLinks" href="display.php">View</a>
				<a href="addform.php">Add</a>
			    </div>
            </section>
        </nav>
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