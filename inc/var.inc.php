<?php
$uname = $_SESSION['user'];
//User ID
$query = $mysqli->query("SELECT id,fname FROM Users3 WHERE uid ='$uname'");  
if($query){
    if($row = mysqli_fetch_assoc($query)){
        $_SESSION["uid"] = (int)$row["id"];
        $_SESSION["fname"] = $row["fname"];
        }
    }
    //end user session query
mysqli_free_result($query);
$uid = $_SESSION['uid'];
$fname = $_SESSION['fname'];
$query = $mysqli->query("SELECT CompID FROM companies WHERE UserID ='$uid'"); 
if($query){
    if($row = mysqli_fetch_assoc($query)){
        $_SESSION["CompID"] = (int)$row["CompID"];
        //end users company session query
mysqli_free_result($query);
$CompID = $_SESSION["CompID"];
        }
    }
if(!isset($CompID)){
    $isRegistered = "Your company is not registered, register <a href='comp.php'>here</a>";
}else{
    $isRegistered = "";
}

//Use mlmid when getting product lines info from product line table 
//$mlmid = $_SESSION["mlmid"];




//Set Variables
$headerLogo = 'images/ccary.svg';
$headerLogoRef = 'admin.php';

$pageOneTitle = 'Media';
$pageOneRef = 'media.php';
$pageTwoTitle = 'Shop';
$pageTwoRef = 'shop.php';
$pageThreeTitle = 'Company Info';
$pageThreeRef = 'comp.php';
$pageFourTitle = 'Site Settings';
$pageFourRef = '.php';



// Make sure to REQUIRE 'var.inc.php' on each page
?>