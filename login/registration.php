<?php
@include '../db/db.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name      = trim($_POST['name']);
    $email     = trim($_POST['email']);
    $password  = trim($_POST['password']);
    $cPassword = trim($_POST['cPassword']);

    if (empty($name) || empty($email) || empty($password) || empty($cPassword)) {
        $errors[] = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } elseif ($password !== $cPassword) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        $check = mysqli_query($conn, "SELECT * FROM registration WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $errors[] = "Email already registered.";
        } else {
            $user_type = ($email === "admin@gmail.com" && $password === "1234") ? "admin" : "user";
            $insert = mysqli_query($conn, "INSERT INTO registration (name, email, password, cPassword, user_type, user_status) 
                                           VALUES ('$name', '$email', '$password', '$cPassword', '$user_type', 'active')");
            if ($insert) {
                header("Location: login.php");
                exit();
            } else {
                $errors[] = "Failed to register. Try again.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>
<body>
    <div id="register-container">
        <h2>Register Now</h2>
        <?php
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
        ?>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter Name"><br>
            <input type="email" name="email" placeholder="Enter Email"><br>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="password" name="cPassword" placeholder="Confirm Password"><br>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
