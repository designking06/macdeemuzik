<?php
function siteLogo(){
$mysqli = new mysqli('localhost','root','','cms');  
$query = $mysqli->query("SELECT CompLogo FROM companies WHERE UserID ='9'");  
if($query){
    if($row = mysqli_fetch_assoc($query)){
        $CompLogo = $row["CompLogo"];
        }
//end user session query
mysqli_free_result($query);
    echo "<img src='images/".$CompLogo."' alt='Fuscious TV' class='w3-image w3-circle w3-padding' width='inherit'>";
    }else{
    echo "Fuscious TV";
}
}
?>