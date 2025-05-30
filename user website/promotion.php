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
    <title>Promotion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="promotion.css">
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





<!-- Hero Section -->
<section class="hero">
    <img src="assets/image2.jpg" alt="Promotions & Events" class="hero-img">
    <h1>Special Events & Promotions</h1>
    <p>Don't miss our exclusive deals and exciting events!</p>
</section>

<!-- Ongoing Promotions Section -->
<section class="promotions">
    <h2>Ongoing Promotions</h2>
    <div class="promotion-list">
        <div class="promotion-item">
            <img src="assets/pexels-bluerhinomedia-2789328.jpg" alt="Promo 1">
            <h3>Happy Hour: 20% Off Drinks!</h3>
            <p>Every weekday from 5 PM to 7 PM. Enjoy a discount on all cocktails, wines, and beers.</p>
        </div>
        <div class="promotion-item">
            <img src="assets/image1.jpg" alt="Promo 2">
            <h3>Weekend Brunch Special</h3>
            <p>Join us on Saturdays and Sundays for our special brunch menu, featuring unlimited mimosas!</p>
        </div>
        <!-- Add more promotions as needed -->
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="events">
    <h2>Upcoming Events</h2>
    <div class="event-list">
        <div class="event-item">
            <img src="assets/pexels-yankrukov-9002891.jpg" alt="Event 1">
            <div class="event-info">
                <h3>Jazz Night</h3>
                <p><i class="fa fa-calendar"></i> Date: October 15, 2023</p>
                <p><i class="fa fa-clock"></i> Time: 7:00 PM - 10:00 PM</p>
                <p><i class="fa fa-map-marker-alt"></i> Location: Main Hall</p>
                <p>Enjoy live jazz performances by talented musicians. Free entry for all guests.</p>
            </div>
        </div>
        <div class="event-item">
            <img src="assets/pexels-anastasia-ilina-makarova.jpg" alt="Event 2">
            <div class="event-info">
                <h3>Wine Tasting Evening</h3>
                <p><i class="fa fa-calendar"></i> Date: November 5, 2023</p>
                <p><i class="fa fa-clock"></i> Time: 6:00 PM - 9:00 PM</p>
                <p><i class="fa fa-map-marker-alt"></i> Location: Wine Cellar</p>
                <p>Join us for an exclusive wine tasting event featuring wines from around the world.</p>
            </div>
        </div>
      
    </div>
</section>

<!-- Special Offers Section -->
<section class="special-offers">
    <h2>Special Offers</h2>
    <div class="offer-item">
    <img src="assets/WhatsApp Image 2024-10-05 at 00.51.07.jpeg" width="200px" height="200px">
        <h3>Buy 1 Get 1 Free!</h3>
        <p>This offer is valid until the end of the month. Don't miss out on this delicious deal!</p>
    </div> <br> <br>

    <div class="offer-item2">
        <img src="assets/combo pack2.jpg" width="200px" height="200px">
        <h3>Combo Pack!</h3>
        <p>This offer is valid until the end of the month. Don't miss out on this delicious deal!</p>
    </div>
   
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
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Reservation</a></li>
                <li><a href="#">Gallery</a></li>
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
                                                       