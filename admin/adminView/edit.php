<?php
include('connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM admin WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $name = $_POST['item_name'];
    $desc = $_POST['item_description'];
    $price = $_POST['item_price'];

    if(!empty($_FILES['image']['name'])){
        $image = $_FILES['image'];
        $filename = time().'_'.$image['name'];
        $tempname = $image['tmp_name'];
        $folder = "images/".$filename;
        move_uploaded_file($tempname, $folder);
        $img_sql = ", image='$folder'";
    } else {
        $img_sql = "";
    }

    $update = "UPDATE admin SET item_name='$name', item_description='$desc', item_price='$price' $img_sql WHERE id=$id";
    mysqli_query($con, $update);
    header("Location: admindashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Item</title>
  <link rel="stylesheet" href="styles/edititems.css">
</head>
<body>
<?php include('navbar.php'); ?>

<h1>Edit Item</h1>
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>" required><br><br>
  <textarea name="item_description" required><?php echo $row['item_description']; ?></textarea><br><br>
  <input type="number" name="item_price" value="<?php echo $row['item_price']; ?>" required><br><br>
  <img src="<?php echo $row['image']; ?>" width="100"><br><br>
  <input type="file" name="image"><br><br>
  <button type="submit" name="update">Update</button>
</form>
</body>
</html>
