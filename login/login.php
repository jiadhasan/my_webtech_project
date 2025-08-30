<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['pass']);

    // 1. Check for empty fields
    if (empty($email)) {
        $errors[] = "Email cannot be blank.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email. Must contain '@' and '.'.";
    }

    if (empty($password)) {
        $errors[] = "Password cannot be blank.";
    } elseif (!preg_match("/^[0-9]+$/", $password)) {
        $errors[] = "Password must contain only digits.";
    }

    // 2. If no validation errors, check login credentials
    if (empty($errors)) {
        if ($email === "admin@gmail.com") {
            if ($password === "1234") {
                // Correct admin credentials
                header("Location:/my_webtech_project/admin/adminView/adminHomePage.php");
                exit();
            } else {
                // Admin email but wrong password → not allowed
                $errors[] = "Invalid Admin credentials.";
            }
        } else {
            // Any other valid user → customer page
            header("Location:/my_webtech_project/customers/customersView/customerHomePage.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div id="container">
        <div><h1>LOGIN NOW</h1></div>
        <div>
            <!-- Show errors -->
            <?php
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p style='color:red;'>$error</p>";
                }
            }
            ?>

            <!-- Login Form -->
            <form action="" method="POST">
                <input placeholder="Enter E-mail" type="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"> <br>
                <input placeholder="Enter Password" type="password" name="pass"> <br>
                <button type="submit" name="login">LOGIN NOW</button> <br>
                <p>Don’t have an account? <a id="text" href="registration.php">Register now</a></p>
            </form>
        </div>
    </div>
</body>
</html>
