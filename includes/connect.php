<?php
error_reporting(0);

$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "flash";

$GLOBALS['db_conn'] = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_database) or die("Error connecting to db.");

function run_query($query) {
	return mysqli_query($GLOBALS['db_conn'], $query) or die(mysqli_error($GLOBALS['db_conn']));
}
?>