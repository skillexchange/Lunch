<?php
/**
 *  GET method
 */
echo $_GET["get1"]."<br>";
echo $_GET["text1"];

echo '<form action="" method="GET">'.
     '<input type="text" name="text1">'. 
     '<input type="submit" name="get1" value="get request">'.
     '</form>';

// show "request" in URL


/**
 *  POST method
 */
echo $_POST["post"];

echo '<form action="" method="POST">'.
     '<input type="submit" name="post" value="post request">'.
     '</form>';


?>
