<?php




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
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
                <a href="sign-in.php" class="signin">Sign In</a>
                <a href="reservation.php" class="signup">+ Reservation</a>
            </div>
        </nav>




<!-- Gallery Section -->
<section class="gallery-section">
    <h1>Gallery</h1>
    <p>Check out our snaps from the kitchen & restaurant</p>

    <!-- Tab Links -->
    <div class="tab-links">
        <a href="food" class="tab-link" data-category="food">Food</a>
        <a href="dessert" class="tab-link" data-category="dessert">Dessert</a>
        <a href="beverages" class="tab-link" data-category="beverages">Beverages</a>
        <a href="restaurant" class="tab-link" data-category="restaurant">Restaurant</a>
    </div>

    <!-- Gallery Images -->
    <div class="gallery-container">
        <!-- Food Images -->
        <div class="gallery-images" id="food" style="display: block;">
            <img src="assets/butter chicken ini.jpg" alt="Food 1">
            <img src="assets/Chilaquiles.png" alt="Food 2">
            <img src="assets/Dhosa.jpg" alt="Food 3">
            <img src="assets/dumplings.jpg" alt="Food 4">
            <img src="assets/fettuccine al Pomodoro.jpg" alt="Food 5">
            <img src="assets/Fried Rice.jpg" alt="Food 6">
            <img src="assets/hot pot.jpg" alt="Food 7">
            <img src="assets/Pizza Margherita.jpg" alt="Food 8">
            <img src="assets/tacos with chicken, fresh vegetables.jpg" alt="Food 9">
            <img src="assets/Lasagne.jpg" alt="Food 10">

        </div>

        <!-- Dessert Images -->
        <div class="gallery-images" id="dessert">
            <img src="assets/watalappan.jpg" alt="Dessert 1">
            <img src="assets/Tres Leches Cake.jpg" alt="Dessert 2">
            <img src="assets/Tiramisù.jpg" alt="Dessert 3">
            <img src="assets/srilankan pancakes.jpg" alt="Dessert 4">
            <img src="assets/Pannacotta.jpg" alt="Dessert 5">
            <img src="assets/image6.jpg" alt="Dessert 6">
        </div>

        <!-- Beverages Images -->
        <div class="gallery-images" id="beverages">
            <img src="assets/mango-juice.jpg" alt="Beverage 1">
            <img src="assets/lime-mojito.jpg" alt="Beverage 2">
            <img src="assets/iced-milo.jpg" alt="Beverage 3">
            <img src="assets/faluda.jpg" alt="Beverage 4">
            <img src="assets/iced-coffee-with-whipped-cream.jpg" alt="Beverage 5">
            <img src="assets/chocolate-milkshake.jpg" alt="Beverage 6">
        </div>

        <!-- Restaurant Images -->
        <div class="gallery-images" id="restaurant">
            <img src="assets/blurred-restaurant-with-many-lights.jpg" alt="Restaurant 1">
            <img src="assets/cafe-interi.jpg" alt="Restaurant 2">
            <img src="assets/design-restaurant-dining-background.jpg" alt="Restaurant 3">
            <img src="assets/enjoying-food-restaurant.jpg" alt="Restaurant 4">
            <img src="assets/table.jpg" alt="Restaurant 5">
            <img src="assets/restaur.jpg" alt="Restaurant 6">
        </div>
    </div>
</section>
<br/>
<br/>
<br/>

<script> 
    document.addEventListener('DOMContentLoaded', function() {
const tabs = document.querySelectorAll('.tab-link');
const galleries = document.querySelectorAll('.gallery-images');

tabs.forEach(tab => {
tab.addEventListener('click', function(event) {
event.preventDefault();

// Hide all galleries
galleries.forEach(gallery => {
    gallery.style.display = 'none';
});

// Show the clicked tab's gallery
const category = tab.getAttribute('data-category');
document.getElementById(category).style.display = 'block';
});
});
});

</script>








        
            
    
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
