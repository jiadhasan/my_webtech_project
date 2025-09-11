<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Item</title>
  <link rel="stylesheet" href="styles/additem.css">
</head>
<body>
<?php include('navbar.php'); ?>

<h1>Add New Item</h1>
<form action="insertitem.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="item_name" placeholder="Item Name" required><br><br>
  <textarea name="item_description" placeholder="Item Description" required></textarea><br><br>
  <input type="number" name="item_price" placeholder="Item Price" required><br><br>
  <input type="file" name="image" accept="image/*" required><br><br>
  <button type="submit" name="submit">Add Item</button>
</form>
</body>
</html>
