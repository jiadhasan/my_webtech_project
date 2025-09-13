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
        
        <?php include 'header.php'; ?>

      
        <main class="hero-text">
            <h1>WELCOME <br> TO OUR <br> RESTAURANT</h1>
            <p>“We don’t just serve meals; we serve experiences — crafted with love,<br>
               seasoned with care, and garnished with happiness.”</p>
        </main>

    </div>

     <h1 class="newpart">Some of the delicious items we offers</h1>

    <div class = "flex-container">
               <div class = "card1">
                <img src="homeitemsimages/1749024918_burger.jpg" alt="image of burger " class = "dish">

                <h4 class = "name_of_dish">Burger</h4>
                <p class = "description">Juicy beef burger with lettuce and tomato.</p>
               </div>


               <div class = "card1">
                <img src="homeitemsimages/1749025187_tacos.jpg" alt="image of tacos " class = "dish">
                <h4 class = "name_of_dish">Tacos</h4>
                <p class = "description">Delicious tacos with fresh ingredients.</p>
               </div>


               <div class = "card1">
                <img src="homeitemsimages/1749026727_cheeesecake.jpg" alt="image of cake " class = "dish">
                <h4 class = "name_of_dish">cheesecake</h4>
                <p class = "description">Creamy cheesecake with a graham cracker crust.</p>
               </div>


               <div class = "card1">
                <img src="homeitemsimages/1749887203_beef steak.jpg" alt="image of beef steak " class = "dish">

                <h4 class = "name_of_dish">Beef Steak</h4>
                <p class = "description">Juicy beef steak cooked to perfection.</p>
               </div>
    </div>


    <div class="btn-margin">
                
    <button type="submit" name = "submit" ><a href="items.php" class = "see-more-button">See More Items</a></button>
    </div>
    
    

    



    
<?php include 'footer.php'; ?>