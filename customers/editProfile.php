<?php include('../db/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Dashboard</title>
  
  <link rel="stylesheet" href="../customers/styles/customerdashboard.css">
    <link rel="stylesheet" href="../styles/homepage.css">

</head>
<body>
<?php include('customernavbar.php'); ?>



<div class="edit-profile-container">






    <h2>Update Profile</h2>
    
    <form class="edit-profile-form" action="updateProfile.php" method="post">
        <input type="hidden" name="id" value="">
        
        <div class="form-group">
            <label for="name"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="name" name="name" value="" required>
        </div>

        <div class="form-group">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" value="" required>
        </div>

        <div class="form-group">
            <label for="old_password"><i class="fa fa-lock"></i> Old Password</label>
            <input type="password" id="old_password" name="old_password" required>
            
        </div>

        <div class="form-group">
            <label for="new_password"><i class="fa fa-key"></i> New Password</label>
            <input type="password" id="new_password" name="new_password">
        </div>

        <button type="submit"><i class="fa fa-save"></i> Update Profile</button>

    </form>



</div>


<style>
body {
    background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
    font-family: 'Segoe UI', Arial, sans-serif;
}

.edit-profile-container {
    max-width: 420px;
    margin: 50px auto;
    padding: 35px 32px 25px 32px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    border: 1px solid #e3e3e3;
}

.edit-profile-container h2 {
    text-align: center;
    margin-bottom: 28px;
    color: #1a237e;
    letter-spacing: 1px;
    font-weight: 700;
}

.edit-profile-form .form-group {
    margin-bottom: 22px;
}

.edit-profile-form label {
    display: block;
    margin-bottom: 7px;
    font-weight: 600;
    color: #3949ab;
    font-size: 15px;
}

.edit-profile-form label i {
    margin-right: 6px;
    color: #1976d2;
}

.edit-profile-form input[type="text"],
.edit-profile-form input[type="email"],
.edit-profile-form input[type="password"] {
    width: 100%;
    padding: 11px 14px;
    border: 1.5px solid #bdbdbd;
    border-radius: 7px;
    font-size: 15.5px;
    background: #f6f9ff;
    transition: border-color 0.2s, box-shadow 0.2s;
    box-sizing: border-box;
}

.edit-profile-form input:focus {
    border-color: #1976d2;
    box-shadow: 0 0 0 2px #e3f2fd;
    outline: none;
}

.edit-profile-form button {
    width: 100%;
    padding: 12px 0;
    background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
    color: #fff;
    border: none;
    border-radius: 7px;
    font-size: 17px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(33,150,243,0.08);
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
}

.edit-profile-form button:hover {
    background: linear-gradient(90deg, #1565c0 0%, #1976d2 100%);
    box-shadow: 0 4px 16px rgba(33,150,243,0.13);
}

@media (max-width: 500px) {
    .edit-profile-container {
        padding: 18px 6vw 18px 6vw;
        max-width: 98vw;
    }
}
</style>

</body>
</html>
