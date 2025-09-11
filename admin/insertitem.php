<?php
session_start();
include('../db/db.php');
if(isset($_POST['submit'])){
    $name = $_POST['item_name'];
    $desc = $_POST['item_description'];
    $price = $_POST['item_price'];

    // Handle file upload
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $image = $_FILES['image'];
        $filename = time() . '_' . $image['name'];
        $uploadDir = "uploads/"; 
        if(!is_dir($uploadDir)){
            mkdir($uploadDir, 0777, true); 
        }
        $targetFile = $uploadDir . $filename;
        move_uploaded_file($image['tmp_name'], $targetFile);

        
        $sql = "INSERT INTO items (item_name, item_description, item_price, image) 
                VALUES ('$name','$desc','$price','$targetFile')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: items.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Please select an image to upload.";
    }
}
?>
