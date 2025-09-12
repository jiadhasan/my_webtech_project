<?php
session_start();
include('../db/db.php');

if(isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    
    // Get item details
    $sql = "SELECT * FROM items WHERE id = $item_id";
    $result = mysqli_query($conn, $sql);
    $item = mysqli_fetch_assoc($result);
    
    // Initialize cart if not exists
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Add item to cart or increase quantity
    if(isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]['quantity']++;
    } else {
        $_SESSION['cart'][$item_id] = [
            'item_name' => $item['item_name'],
            'item_price' => $item['item_price'],
            'quantity' => 1,
            'image' => $item['image']
        ];
    }
    
    header("Location: order.php");
    exit();
}
?>