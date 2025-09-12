<?php
session_start();

if(isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    
    if(isset($_SESSION['cart'][$item_id])) {
        unset($_SESSION['cart'][$item_id]);
    }
}

header("Location: order.php");
exit();
?>