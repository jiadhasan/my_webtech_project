<?php
include('connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['item_name'];
    $desc = $_POST['item_description'];
    $price = $_POST['item_price'];

    // Handle file upload
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $image = $_FILES['image'];
        $filename = time() . '_' . $image['name'];
        $uploadDir = "uploads/"; // Make sure this folder exists
        if(!is_dir($uploadDir)){
            mkdir($uploadDir, 0777, true); // create folder if it doesn't exist
        }
        $targetFile = $uploadDir . $filename;
        move_uploaded_file($image['tmp_name'], $targetFile);

        // Save full path in database
        $sql = "INSERT INTO admin (item_name, item_description, item_price, image) 
                VALUES ('$name','$desc','$price','$targetFile')";
        $result = mysqli_query($con, $sql);

        if($result){
            header("Location: admindashboard.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Please select an image to upload.";
    }
}
?>
