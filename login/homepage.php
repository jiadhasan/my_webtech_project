<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page</title>
    <link rel="stylesheet" href="styles/homepage.css">
</head>
<body>

    
    <div id="bg-img">
        
        <header>
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
        </header>

      
        <main class="hero-text">
            <h1>WELCOME <br> TO OUR <br> RESTAURANT</h1>
            <p>“We don’t just serve meals; we serve experiences — crafted with love,<br>
               seasoned with care, and garnished with happiness.”</p>
        </main>

    </div>

     <h1 class="newpart">Some of the delicious items we offers</h1>

    <div class = "flex-container">
               <div class = "card1">
                <img src="../login/homeitemsimages/1749024918_burger.jpg" alt="image of burger " class = "dish">

                <h4 class = "name_of_dish">Burger</h4>
                <p class = "description">Juicy beef burger with lettuce and tomato.</p>
               </div>


               <div class = "card1">
                <img src="../login/homeitemsimages/1749025187_tacos.jpg" alt="image of tacos " class = "dish">
                <h4 class = "name_of_dish">Tacos</h4>
                <p class = "description">Delicious tacos with fresh ingredients.</p>
               </div>


               <div class = "card1">
                <img src="../login/homeitemsimages/1749026727_cheeesecake.jpg" alt="image of cake " class = "dish">
                <h4 class = "name_of_dish">cheesecake</h4>
                <p class = "description">Creamy cheesecake with a graham cracker crust.</p>
               </div>


               <div class = "card1">
                <img src="../login/homeitemsimages/1749887203_beef steak.jpg" alt="image of beef steak " class = "dish">

                <h4 class = "name_of_dish">Beef Steak</h4>
                <p class = "description">Juicy beef steak cooked to perfection.</p>
               </div>
    </div>

    <button type="submit" name = "submit" ><a href="../login/items.php" class = "see-more-button">See More</a></button>

    



    <footer>
        <div class="footer-container">
              <div>
                <h3>Contact Us</h3> <hr>
                <p >Email: info@sugarandsoure.com</p>
              </div>
              <div>
                <h3>Follow Us</h3> <hr>
                <p>Facebook | Twitter | Instagram</p>
              </div>
              <div>
                <h3>Address</h3> <hr>
                <p>123 Food St, Flavor Town, USA</p>
              </div>
              <div>
                <h3>Opening Hours</h3> <hr>
                <p>Mon - Fri: 9 AM - 9 PM</p>
                <p>Sat - Sun: 10 AM - 10 PM</p>
              </div>
              
             
        </div>
         <p class = "footer-text">&copy; 2024 Sugar & Soure. All rights reserved.</p>

    </footer>
</body>
</html>
