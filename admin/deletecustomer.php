<?php
include('../db/db.php');
$id = $_GET['id'];

$sql = "DELETE FROM registration WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: customers.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
