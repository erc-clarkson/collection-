<?php

require_once "functions.php";

$db = connectToDatabase(); 
$data = fetchAllDatabase($db);

?>

<html>
    <head>
        <link href="stylesheet.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <nav>
            <section>
                <div class="nav">
				    <a href="index.php">View</a>
                    <a href="shuffle.php">shuffle</a>
			    </div>
            </section>
        </nav>    
        <section class= "title">
                <div>
                    <h1>Add Vinyl</h1> 
                </div>
            </section>
            <main>
                <form action='hidden.php' method='POST'>
                    <div>
                        <label for='artist-name'> Artist Name </label>
                        <br>
                        <input type='text' name='artist-name' />
                    </div>
                    <div>
                        <label for='record-name'> Record Name </label>
                        <br>
                        <input type='text' name='record-name' />
                    </div>
                    <div>
                        <label for='record-type'>Record Type</label>
                        <br>
                        <select id='record-type' name='record-type'>
                        <option value="single">Single</option>
                        <option value="album">Album</option>
                        </select>
                    </div>
                    <div>
                        <label for='images'>Record Image</label>
                        <br>
                        <input type='text' name='images' value='https://i.imgur.com/jF0WBef.jpg' />
                    </div>
                    <div>
                        <input id = 'submitButtom' type='submit' />
                    </div>
                </form>
            </main>
        </form>
    </body>
</html>