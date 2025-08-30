<?php
// Start PHP validation before HTML
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm  = trim($_POST['confirm_password']);

    // 1. Name validation (only lowercase letters)
    if (empty($name)) {
        $errors[] = "Name cannot be blank.";
    } elseif (!preg_match("/^[a-z]+$/", $name)) {
        $errors[] = "Name must contain only lowercase letters.";
    }

    // 2. Email validation
    if (empty($email)) {
        $errors[] = "Email cannot be blank.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email. Must contain '@' and '.'";
    }

    // 3. Password validation
    if (empty($password) || empty($confirm)) {
        $errors[] = "Password fields cannot be blank.";
    } elseif (!preg_match("/^[0-9]+$/", $password)) {
        $errors[] = "Password must contain only digits.";
    } elseif ($password !== $confirm) {
        $errors[] = "Passwords do not match.";
    }

    // If no errors → redirect
    if (empty($errors)) {
        header("Location:/my_webtech_project/customers/customersView/customerHomePage.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>
<body>
    <div id="container">
        <div><h1>REGISTRATION NOW</h1></div>
        <div>
            <!-- Show errors -->
            <?php
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p style='color:red;'>$error</p>";
                }
            }
            ?>

            <!-- Registration Form -->
            <form action="" method="POST">
                <input placeholder="Enter Name" type="text" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>"><br>
                <input placeholder="Enter E-mail" type="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"><br>
                <input placeholder="Enter Password" type="password" name="password"><br>
                <input placeholder="Confirm Password" type="password" name="confirm_password"><br>
                
                <button type="submit" name="submit">Register</button> <br>
                <p>Already have an account? <a id="text" href="login.php">Login now</a></p>
            </form>
        </div>
    </div>
</body>
</html>
