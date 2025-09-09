<?php
@include '../db/db.php';
session_start();

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['pass']);

    if (empty($email) || empty($password)) {
        $errors[] = "Email and Password required.";
    } else {
        $result = mysqli_query($conn, "SELECT * FROM registration WHERE email='$email' AND password='$password' AND user_status='active'");
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['user_id']   = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];

            if ($row['user_type'] === "admin") {
                header("Location:/my_webtech_project/admin/adminView/admindashboard.php");
                exit();
            } else {
                header("Location:/my_webtech_project/customers/customerDashboard.php");
                exit();
            }
        } else {
            $errors[] = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div id="login-container">
        <h2>Login Now</h2>
        <?php
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
        ?>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter E-mail"><br>
            <input type="password" name="pass" placeholder="Enter Password"><br>
            <button type="submit">LOGIN NOW</button><br>
            <p>Don’t have an account? <a href="registration.php">Register now</a></p>
        </form>
    </div>
</body>
</html>
