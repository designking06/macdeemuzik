<?php
if(isset($_POST['deleteTask'])){
  $taskID = $_POST['taskID'];
  $page = $_POST['page'];
  $mysqli = new mysqli('localhost','root','','cms');
  $delete = "DELETE FROM tasks WHERE id = $taskID";
  $result = $mysqli->query($delete);
  if($result === TRUE){
    header("location: $page");
    exit;
}

}
if(isset($_POST['deleteProduct'])){
  $ProductID = $_POST['ProductID'];
  $page = $_POST['page'];
  $mysqli = new mysqli('localhost','root','','cms');
  $delete = "DELETE FROM productlines WHERE ProductLineID = $ProductLineID";
  $result = $mysqli->query($delete);
  if($result === TRUE){
    header("location: $page");
    exit;
}

}
?>
