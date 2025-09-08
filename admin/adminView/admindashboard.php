<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles/admindashboard.css">
</head>
<body>
<?php include('navbar.php'); ?>

<h1 style="text-align:center;">Items Dashboard</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Item Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
    <th>Actions</th>
  </tr>
  <?php
  $sql = "SELECT * FROM admin";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($result)){
      echo "
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['item_name']."</td>
        <td>".$row['item_description']."</td>
        <td>".$row['item_price']."</td>
        <td><img src='".$row['image']."' width='80' height='80' alt='Item Image'></td>
        <td>
          <a href='edit.php?id=".$row['id']."' class='action-btn edit-btn'>Edit</a>
          <a href='delete.php?id=".$row['id']."' class='action-btn delete-btn' onclick='return confirm(\"Are you sure?\");'>Delete</a>
        </td>
      </tr>
      ";
  }
  ?>
</table>

</body>
</html>
