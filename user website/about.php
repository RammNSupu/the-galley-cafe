
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
    <title>About page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
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


    <!-- About Section -->
    <section class="about-section">
        <div class="about-header">
            <h1>About</h1>
            <p class="intro-text">Welcome to The Gallery Café, where exceptional cuisine meets artful <br>
                                  ambiance. Located in the heart of City, we offer a diverse menu crafted <br>
                                  from fresh, locally-sourced ingredients, designed to delight your palate.<br>
                                  We strive to make every visit memorable with our warm service and <br>
                                  creative atmosphere.</p>
        </div>

        <div class="about-content">
            <h2>Things toKnow about Us</h2>
            <div class="our-story">
                <div class="image-placeholder">
                    <img src="assets/image4.jpg" alt="Story Image" class="story-image">
                </div>
                <div class="text-section">
                    <h3>OUR STORY</h3>
                    <p><strong>8 Years of Experience</strong></p>
                    <p>The Gallery Cafe has been a beloved destination for food lovers for over 8 years.
                       Established with a vision to blend culinary creativity with an inspiring atmosphere.
                       we've grown into a space where food is an experience, not just a meal. Our journey 
                       began with a passion for fresh, locally-sourced ingredients and a commitment to 
                       quality, which continues to drive us today. Over the years, we've welcomed countless
                       guests, building lasting relationships and memories. At The Gallery Cafe, every dish 
                       tells a story, and every visit is an invitation to be part of our journey.</p>
                </div>
            </div>

            <div class="vision-mission">
                <div class="vision-box">
                    <h4>Our Vision</h4>
                    <p>To be a leading cafe that blends culinary excellence with artistic ambiance, creating a space where every visit celebrates flavor, creativity, and community.</p>
                </div>
                <div class="mission-box">
                    <h4>Our Mission</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tortor nec leo sollicitudin dapibus.</p>
                </div>
            </div>
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