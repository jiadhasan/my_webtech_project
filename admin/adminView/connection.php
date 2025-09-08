<?php
$con = mysqli_connect("localhost", "root", "", "imageupload");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>
