<?php 

include('../db/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="../customers/styles/customerdashboard.css">
</head>
<body>
<?php include('customernavbar.php'); ?>

<h1 style="text-align:center; margin: 20px 0;">Available Items</h1>

<div class="card-container">
  <?php
  $sql = "SELECT * FROM items";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
          echo "
          <div class='card'>
            <img src='../admin/".$row['image']."' alt='Item Image'>
            <div class='card-content'>
              <h3>".htmlspecialchars($row['item_name'])."</h3>
              <p>".htmlspecialchars($row['item_description'])."</p>
              <p class='price'>$".number_format($row['item_price'], 2)."</p>
              <form method='POST' action='add_to_cart.php'>
                <input type='hidden' name='item_id' value='".$row['id']."'>
                <button type='submit' class='add-btn'>Add to Cart</button>
              </form>
            </div>
          </div>
          ";
      }
  } else {
      echo "<p style='text-align:center;'>No items available.</p>";
  }
  ?>
</div>

</body>
</html>