<?php

include('../db/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="../customers/styles/order.css">
</head>
<body>
<?php include('customernavbar.php'); ?>

<div class="container">
  <h1>Your Shopping Cart</h1>
  
  <?php if(empty($_SESSION['cart'])): ?>
    <p class="empty-cart">Your cart is empty.</p>
  <?php else: ?>
    <table class="cart-table">
      <thead>
        <tr>
          <th>Item Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $grand_total = 0;
        foreach($_SESSION['cart'] as $item_id => $item):
          $total = $item['item_price'] * $item['quantity'];
          $grand_total += $total;
        ?>
        <tr>
          <td><?php echo htmlspecialchars($item['item_name']); ?></td>
          <td>$<?php echo number_format($item['item_price'], 2); ?></td>
          <td><?php echo $item['quantity']; ?></td>
          <td>$<?php echo number_format($total, 2); ?></td>
          <td>
            <form method="POST" action="remove_from_cart.php" style="display:inline;">
              <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
              <button type="submit" class="remove-btn">Remove</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="total-section">
      <h3>Grand Total: $<?php echo number_format($grand_total, 2); ?></h3>
    </div>

    <div class="checkout-section">
      <h2>Checkout</h2>
      <form method="POST" action="process_order.php">
        <div class="payment-options">
          <label>
            <input type="radio" name="payment_method" value="bkash" required>
            bKash
          </label>
          <label>
            <input type="radio" name="payment_method" value="rocket" required >
            Rocket
          </label>
          <label>
            <input type="radio" name="payment_method" value="nagad" required>
            Nagad
          </label>

        </div>
        <button type="submit" class="checkout-btn">Complete Purchase</button>
      </form>
    </div>
  <?php endif; ?>
</div>
</body>
</html>