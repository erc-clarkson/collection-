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
				<a href="display.php">View</a>
				<!-- <a href="addform.php">Add</a> -->
                <a href="shuffle.php">shuffle</a>
			    </div>
            </section>
        </nav>    
        <section class= "title">
                <div>
                    <h1>Add Vinyls</h1> 
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
                        <label for="record-size">Record Size</label>
                        <br>
                        <select id="record size" name="record-size">
                        <option value="7 inch">7 inch</option>
                        <option value="10 inch">10 inch</option>
                        <option value="12 inch">12 inch</option>
                        </select>
                    </div>
                    <div>
                        <label for="images">Record Image</label>
                        <br>
                        <input type='text' name='images' value="https://i.imgur.com/tIS8gME.jpg" />
                 
                        </select>
                    </div>

                    <div>
                        <input id = "submitButtom" type='submit' />
                    </div>
                </form>
            </main>
        </form>
    </body>
</html>