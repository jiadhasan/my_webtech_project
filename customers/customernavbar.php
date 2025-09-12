<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Navbar</title>
  <link rel="stylesheet" href="styles/customernavbar.css">
</head>
<body>
<div class="navbar">
  <div class="nav-left">
    <h4 class="restaurant-name">Sugar & Sour</h4>
  </div>
  <div class="nav-right">
    <ul>
      <li><a href="customerDashboard.php">Home Page</a></li>
      <li><a href="items.php">Items</a></li>
      <li><a href="order.php">My Orders</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
</body>
</html>
