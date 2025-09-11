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

<h1 style="text-align:center;">Orders Dashboard</h1>

<table>
  <tr>
    <th>Order ID</th>
    <th>Customer Name</th>
    <th>Item Name</th>
    <th>Quantity</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  <?php
  $sql = "SELECT orders.id, registration.name, items.item_name, orders.quantity, orders.status FROM orders
          JOIN registration ON orders.customer_id = registration.id
          JOIN items ON orders.item_id = items.id";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){
      echo "
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['item_name']."</td>
        <td>".$row['quantity']."</td>
        <td>".$row['status']."</td>
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
