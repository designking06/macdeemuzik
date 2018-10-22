<?php
//create connection
$mysqli = new mysqli('localhost','root','','cms');
//check connection
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);}

//Make sure to REQUIRE 'db.inc.php' on all session related pages
?>
