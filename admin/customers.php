<?php include('../db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles/admindashboard.css">
</head>
<body>
<?php include('navbar.php'); ?>

<h1 style="text-align:center;">Customer list</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
  </tr>
  <?php
  $sql = "SELECT * FROM registration WHERE user_type='user'";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){
      echo "
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>
          <a href='#' class='action-btn edit-btn'>Edit</a>
          <a href='deletecustomer.php?id=".$row['id']."' class='action-btn delete-btn' onclick='return confirm(\"Are you sure?\");'>Delete</a>
        </td>
      </tr>
      ";
  }
  ?>
</table>

</body>
</html>
