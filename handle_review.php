<?php
include("includes/connect.php");
$pagetitle="RIC's sports betting";
include("includes/html_start.php");

$name = $_REQUEST['site_name'];
$description = $_REQUEST['site_description'];
$star = $_REQUEST['star_rating'];

$query = "INSERT INTO reviews SET site_name='".$name."', site_description='', rating='';";
$result = run_query($query);

echo "Great, your review has been added!";

include("includes/html_stop.php");
?>