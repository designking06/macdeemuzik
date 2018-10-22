<?php
require "db.inc.php";
//use this page to hold different MYSQLI INSERT commands

//Insert a new user to database


//Insert a new product

//Insert a new photo

//Insert a new video

//Insert a Task in a To-do list
if(isset($_POST['submitTask'])){
    $task = $_POST['task'];
    $description = $_POST['description'];
    $userID = $_POST['userID'];
    $page = $_POST['page'];
    $query = "INSERT INTO tasks (task,description,userID) VALUES ('$task','$description','$userID')";
if($mysqli->query($query) === TRUE){
  header("location: $page");
    exit;
}else{
  echo "sorry". $mysqli->error;
}
}


?>
