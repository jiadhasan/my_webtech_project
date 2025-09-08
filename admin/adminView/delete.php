<?php
include('connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id=$id";
$result = mysqli_query($con, $sql);

if($result){
    header("Location: admindashboard.php");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}
?>
