
<?php

session_start(); // Start the session


// Check if the user is logged in by verifying if 'user_id' is set in the session
// if (!isset($_SESSION['email'])) {
//     $is_logged_in = false;
// } else {
//     $is_logged_in = true;
// }
//

$is_logged_in = isset($_SESSION['email']);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Cafe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Header section -->
    
        <nav class="navbar">
            <div class="logo">
                <img src="assets/THE GALLERY (12).png" alt="The Gallery Cafe Logo" width="50px" height="50px">
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="promotion.php">Promotions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
            <div class="auth-links">
            <!-- Show Sign-In or Logout button based on login status -->
            <?php if (!$is_logged_in): ?>
                <a href="sign-in.php" class="signin">Sign-In</a>
            <?php else: ?>
                <span>Welcome, <?php echo $_SESSION['username']; ?></span>
                <a href="logout.php" class="logout">Logout</a>
                <a href="reservation.php" class="reservation">+ Reservation</a>
            <?php endif; ?>
            
            </div>
        </nav>


    <!-- Welcome section -->
    <div class="main">
        <div class="main_text">
            <h1>The Gallery Café</h1>
            <h4>(Where every bite tells a story)</h4>
           <p>
            Discover a world of flavors where tradition meets creativity.
            Our expertly crafted dishes are made from the finest ingredients, offering a 
            feast for both the palate and the eyes. Step into a warm and inviting atmosphere where every 
            meal becomes a memorable moment, curated just for you.!

           </p>
        </div>

        <div class="main_image">
            <img src="assets/—Pngtree—sausage cheese pizza slice three-dimensional_13137250.png">
        </div>
    </div>



  

   

    <!-- Why Us section -->
<section class="why-us">
    <div class="why-us-content">
        <h2>Why Us?</h2>
        <p>Our cuisines come from across the world with a variety of experiences waiting for you to explore.</p>
        <a href="about.php" class="Learn More"> Learn More</a>
    </div>
    <div class="image-box">
        <img src="assets/image9.jpg" alt="Why Us Image">
    </div>
</section>


    <!-- Offers section -->
<section class="offers-section">
    <h2>Offers here!</h2>
    <div class="offers-container">
        <div class="offer-box">
            <h2>Combo Pack</h2>
            <img src="assets/combo pack2.jpg" alt="Combo Pack" width="300px">
            <p>Are you hungry? Don't wait! Grab our exclusive combo pack today.</p>
            <button class="offer-button" onclick="window.location.href='promotion.php'">View</button>
        </div>
        <div class="offer-box">
            <h2>Buy One Get One Free</h2>
            <img src="assets/Buy 1get 1.jpg" alt="Buy One Get One Free">
            <p>Limited time offer! Buy one, get one free on selected dishes.</p>
            <button class="offer-button" onclick="window.location.href='promotion.php'">View</button>
        </div>
    </div>
</section>

    <!-- Cuisines Section -->
<section class="cuisines">
    <div class="cuisine-container">
        <div class="cuisine-image">
            <img src="assets/restaurant-food.jpg" alt="Cuisine Picture">
        </div>
        <div class="cuisine-content">
            <h2>A WORLD OF FLAVOURS AWAIT YOU!</h2>
            <p>From Sri Lankan, Chinese, Italian to English, our menu offers you the best of international cuisine.</p>
            <button class="menu-button">Go To Menu</button>
        </div> 
    </div> 
</section>  <br> <br>


    <!-- Gallery section -->

    <h2>Our Gallery</h2>

    <div class="full-img" id="fullImgBox">
        <img src="assets/image1.jpg" id="fullImg">
        <span onclick="closefullImg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="assets/table.jpg" onclick="openfullImg(this.src)">
        <img src="assets/delicious-food-stove.jpg" onclick="openfullImg(this.src)">
        <img src="assets/Tiramisù.jpg" onclick="openfullImg(this.src)">
        <img src="assets/Burritos.png" onclick="openfullImg(this.src)">
        <img src="assets/biriyaniiii.jpg" onclick="openfullImg(this.src)">
        <img src="assets/delicious-pasta-tray.jpg" onclick="openfullImg(this.src)">
        <img src="assets/cafe-interi.jpg" onclick="openfullImg(this.src)">
        <img src="assets/capa.jpg" onclick="openfullImg(this.src)">
        <img src="assets/enjoying-food-restaurant.jpg" onclick="openfullImg(this.src)">

    <div class="button">
        <button class="show-button" onclick="window.location.href='gallery.php'">Show More</button>
    </div>
   
    </div>

    <script>
        var fullImgBox=document.getElementById("fullImgBox");
        var fullImg=document.getElementById("fullImg");

        function openfullImg(pic){
            fullImgBox.style.display="flex";
            fullImg.src=pic;

        }

        function closefullImg() {
            fullImgBox.style.display="none";
            

        }

        


    </script>

   <!-- Values section -->
<section class="values">
    <h2>Our Values</h2>
    <div class="value-icons">
        <div class="value" onclick="togglePopup(this)">
            <i class="fa-solid fa-bowl-rice"></i> <br>
            <p>Difference Cuisins</p>
        </div>
        <div class="value" onclick="togglePopup(this)">
            <i class="fa-solid fa-burger"></i><br>
            <p>Menu Variety</p>
        </div>
        <div class="value" onclick="togglePopup(this)">
            <i class="fa-solid fa-pizza-slice"></i> <br>
            <p>100% Fresh </p>
        </div>
        <div class="value" onclick="togglePopup(this)">
            <i class="fa fa-cutlery"></i> <br> 
            <p>Well experienced chefs</p>
        </div>
    </div> <br> <br> 

    <script>
        function togglePopup(element) {
    // Add or remove the 'expanded' class for pop-up effect
    element.classList.toggle("expanded");
}

    </Script>
</section>











    
    <!-- Footer -->
<footer>
    <div class="footer-container">
        <!-- Left section: Contact Info -->
        <div class="footer-contact">
            <img src="assets/THE GALLERY (12).png" alt="Logo" class="footer-logo">
            <p><i class="fa fa-phone"></i> Phone: +94 11 665 1765</p>
            <p><i class="fa fa-envelope"></i> Email: cafe@gmail.com</p>
            <p><i class="fa fa-map-marker-alt"></i> Find us: No 25, Vincent road, Colombo 4</p>
        </div>

        <!-- Middle section: Quick Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="inex.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>

        <!-- Right section: Opening Hours -->
        <div class="footer-hours">
            <h3>Opening Hours</h3>
            <p>Monday - Thursday: 10.00 AM - 10.30 PM</p>
            <p>Friday - Sunday: 9.00 AM - 11.30 PM</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 All Rights Reserved</p>
    </div>
</footer>

</body>
</html>
                                                       