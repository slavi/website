<?php

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db($dbname, $conn);
if (!$db_selected) {
    die ('Can\'t use database : ' . mysql_error());
}
?>