<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #e26161ff;
            overflow: hidden;
        }
        .navbar .nav-left {
            float: left;
            padding: 14px 20px;
            color: white;
        }
        .navbar .nav-right {
            float: right;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            float: left;
        }
        .navbar ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar ul li a:hover {
            background-color: #575757;
        }
        .restaurant-name {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
  <div class="nav-left">
    <h4 class="restaurant-name">Sugar & Sour</h4>
  </div>
  <div class="nav-right">
    <ul>
      <li><a href="admindashboard.php">Home Page</a></li>
      <li><a href="additem.php">Add Items</a></li>
      <li><a href="orders.php">Orders</a></li>
      <li><a href="customers.php">Customers</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

</body>
</html>