<?php

require_once "functions.php";

$db = connectToDatabase(); 
$data = fetchAllDatabase($db);
?>

<html  lang="en-gb">
    <head>
        <title>Vinyl Collection</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <nav>
            <section>
                <div>
			        <a href="addform.php">Add</a>
                    <a href="shuffle.php">shuffle</a>
			    </div>
            </section>
        </nav>
        <section class= "title">
            <div>
                <h1>Your Vinyl</h1> 
            </div>
        </section>
        <section class= "sub">
            <section  class= "displayWidth"> 
                <div class= "count">
                    <p>Total: <?php echo count($data);?></p>
                </div>
            </section> 
        </section>
        <main>
            <section class = "displayWidth">
            <div class= "records">
              <?php echo displayRecords($data);?>
              </section>
            </div>
        </main>
    </body>
</html>