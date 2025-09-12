<?php
session_start();
include('../db/db.php');

if(isset($_POST['payment_method']) && !empty($_SESSION['cart'])) {
    $payment_method = $_POST['payment_method'];
    
    foreach($_SESSION['cart'] as $item_id => $item) {
        $sql = "INSERT INTO orders (item_id, item_name, item_price, quantity, payment_method) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isdis", $item_id, $item['item_name'], $item['item_price'], $item['quantity'], $payment_method);
        $stmt->execute();
    }
    
    // Clear cart after successful order
    unset($_SESSION['cart']);
    
    header("Location: order_success.php");
    exit();
} else {
    header("Location: order.php");
    exit();
}
?>