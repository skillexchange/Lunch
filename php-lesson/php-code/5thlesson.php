<?php
/**
 *  GET method
 */
echo $_GET["get"];

echo '<form action="" method="GET">'.
     '<input type="submit" name="get" value="get request">'.
     '</form>';

/**
 *  POST method
 */
echo $_POST["post"];

echo '<form action="" method="POST">'.
     '<input type="submit" name="post" value="post request">'.
     '</form>';


?>
