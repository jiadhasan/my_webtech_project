<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<style>
    
#flex {
    display: flex;
    background-color: rgba(245, 244, 242, 0.9);
    padding: 10px 20px;
    justify-content: space-between;
    border-radius: 20px;
    margin: 15px;
    box-shadow: 3px 3px 10px rgba(0,0,0,0.2);
}

a {
    text-decoration: none;
    margin-right: 40px;
    color: gray;
    font-size: larger;
}
a:hover {
    color: blueviolet;
    cursor: pointer;
}

#name {
    font-size: 25px;
    font-weight: bolder;
    font-family: monospace;
    color: rgb(227, 135, 189);
}
.logo{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-left: 15px;
    margin-top: 15px;
}

</style>
<body>
     <div id="flex">
                <div id="name">
                    <img src="./homepageimage/logo.png" alt="Logo" class="logo">
                    Sugar & Soure
                </div>
                <div>
                    <ul>
                        <a href="../login/items.php">Items</a>
                        <a href="./about.php">About</a>
                        <a href="./login.php">Login</a>
                    </ul>
                </div>       
            </div>
</body>
</html>