
<?php

session_start(); // Start the session


$is_logged_in = isset($_SESSION['email']);



// Get the user ID from the session
// $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
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




        
        <div class="search-cart-container">
        <!-- Cart Icon and Count -->
            <div class="cart-icon" onclick="toggleCart()">
                <i class="fa fa-shopping-cart"></i>
                <span id="cart-count">0</span>
            </div>

            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search by cuisine..." oninput="searchCuisine()">
                <i class="fa fa-search"></i>
            </div>
        </div>
           
        
            <!-- Main Menu Section -->
            <section class="menu-section">
                <h1>Savor Our Dishes</h1>
                <div class="cuisine-tabs">
                    <button onclick="filterCuisine('all')">All</button>
                    <button onclick="filterCuisine('srilankan')">Sri Lankan</button>
                    <button onclick="filterCuisine('chinese')">Chinese</button>
                    <button onclick="filterCuisine('italian')">Italian</button>
                    <button onclick="filterCuisine('Indian')">Indian</button>
                    <button onclick="filterCuisine('mexican')">Mexican</button>
                    <button onclick="filterCuisine('beverages')">Beverages</button>
                </div>
        
                <div class="menu-items">
                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/egg hoppers.jpg" alt="egg hoppers">
                        <h3>Egg Hoppers</h3>
                        <p>A Sri Lankan classic with egg perfection.</p>
                        <span class="price">Rs.350.00</span>
                        <button class="pre-order-btn" onclick="addToCart('egg hoppers', 350)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/egg kottu.webp" alt="egg kottu">
                        <h3>Egg Kottu</h3>
                        <p>Savory egg scrambled into spiced kottu.</p>
                        <span class="price">Rs.2100.00</span>
                        <button class="pre-order-btn" onclick="addToCart('egg kottu', 2100)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/Pol roti.jpg" alt="Pol roti">
                        <h3>Pol roti</h3>
                        <p>Traditional coconut roti, perfect with curry.</p>
                        <span class="price">Rs.500.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Pol roti', 500)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/string hoppers.jpg" alt="string hoppers">
                        <h3>string hoppers</h3>
                        <p>Soft, steamed strands of rice flour.</p>
                        <span class="price">Rs.420.00</span>
                        <button class="pre-order-btn" onclick="addToCart('string hoppers', 420)">Pre-order</button>
                    </div>



                    
                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/fish bun.jpg" alt="fish bun">
                        <h3>Fish Bun</h3>
                        <p>Fluffy bun filled with spicy fish.</p>
                        <span class="price">Rs.200.00</span>
                        <button class="pre-order-btn" onclick="addToCart('fish bun', 200)">Pre-order</button>
                    </div>





                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/fish rolls.jpg" alt="fish rolls">
                        <h3>fish Rolls</h3>
                        <p>"Crunchy on the outside, spicy fish inside.</p>
                        <span class="price">Rs.350.00</span>
                        <button class="pre-order-btn" onclick="addToCart('fish rolls', 350)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/Lamprais.webp" alt=""Lamprais>
                        <h3>Lamprais</h3>
                        <p>Dutch-influenced rice, meat, and sambal.</p>
                        <span class="price">Rs.1600.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Lamprais', 1600)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/plain hoppers.webp" alt="plain hoppers">
                        <h3>plain hoppers</h3>
                        <p>Classic hopper, best with sambal or curry.</p>
                        <span class="price">Rs.300.00</span>
                        <button class="pre-order-btn" onclick="addToCart('plain hoppers', 300)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/watalappan.jpg" alt="watalappan">
                        <h3>Watalappan</h3>
                        <p>Traditional Sri Lankan caramelized pudding.</p>
                        <span class="price">Rs.270.00</span>
                        <button class="pre-order-btn" onclick="addToCart('watalappan', 270)">Pre-order</button>
                    </div>



                    
                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/srilankan pancakes.jpg" alt="srilankan pancakes">
                        <h3>srilankan pancakes</h3>
                        <p>Sweet coconut wrapped in soft pancake layers.</p>
                        <span class="price">Rs.360.00</span>
                        <button class="pre-order-btn" onclick="addToCart('srilankan pancakes',360 )">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/rice and curry.jpg" alt="rice and curry">
                        <h3>Rice And curry</h3>
                        <p>A wholesome meal of rice and curries.</p>
                        <span class="price">Rs.950.00</span>
                        <button class="pre-order-btn" onclick="addToCart('rice and curry', 950)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/srilankan chicken curry.webp" alt="chicken curry">
                        <h3>srilankan chicken curry</h3>
                        <p>Aromatic chicken simmered in spicy coconut gravy.</p>
                        <span class="price">Rs.1450.00</span>
                        <button class="pre-order-btn" onclick="addToCart('srilankan chicken curry', 1450)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/roast paan.webp" alt="roast paan">
                        <h3>Roast paan</h3>
                        <p>Crunchy Sri Lankan bread with a chewy bite.</p>
                        <span class="price">Rs.270.00</span>
                        <button class="pre-order-btn" onclick="addToCart('roast paan', 270)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/Pol sambola.jpg" alt="Pol sambola">
                        <h3>Pol sambola</h3>
                        <p>Spicy coconut mix with a tangy kick.</p>
                        <span class="price">Rs.280.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Pol sambola', 280)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="srilankan">
                        <img src="assets/Halapa.webp" alt="Halapa">
                        <h3>Halapa</h3>
                        <p>Steamed leaf-wrapped coconut and flour treat.</p>
                        <span class="price">Rs.500.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Halapa', 500)">Pre-order</button>
                    </div>



                    



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Kung Pao Chicken.webp" alt="Kung Pao Chicken">
                        <h3>Kung Pao Chicken</h3>
                        <p>Spicy stir-fried chicken with peanuts.</p>
                        <span class="price">Rs.1900.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Kung Pao Chicken',1900 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/hot pot.jpg" alt="hot pot">
                        <h3>Hot pot</h3>
                        <p>Flavorful broth with assorted meats and veggies.</p>
                        <span class="price">Rs..3100</span>
                        <button class="pre-order-btn" onclick="addToCart('hot pot',3100 )">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Sweet and Sour Pork.webp" alt="Sweet and Sour Pork">
                        <h3>Sweet and Sour Pork</h3>
                        <p>A perfect balance of sweet and tangy.</p>
                        <span class="price">Rs.2000.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Sweet and Sour Pork',2000 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/dumplings.jpg" alt="dumplings">
                        <h3>Dumplings</h3>
                        <p>Soft dough pockets filled with savory goodness.</p>
                        <span class="price">Rs.1945.00</span>
                        <button class="pre-order-btn" onclick="addToCart('dumplings', 1945 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Fried Tofu.jpg" alt="Fried Tofu">
                        <h3>Fried Tofu</h3>
                        <p>Crispy tofu bites with a savory flavor.</p>
                        <span class="price">Rs.1430.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Fried Tofu', 1430 )">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Wonton Soup.webp" alt="Wonton Soup">
                        <h3>Wonton Soup</h3>
                        <p>Delicate wontons in a light broth.</p>
                        <span class="price">Rs.1330.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Wonton Soup', 1330 )">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Twice-Cooked Pork Slices.webp" alt="Twice-Cooked Pork Slices">
                        <h3>Twice-Cooked Pork Slices</h3>
                        <p>Sliced pork with spicy, smoky notes.</p>
                        <span class="price">Rs.2250.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Twice-Cooked Pork Slices', 2250 )">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/egg-tart-wood.jpg" alt="egg-tart-wood">
                        <h3>egg-tart</h3>
                        <p>Creamy egg custard in a flaky crust.</p>
                        <span class="price">Rs.1220.00</span>
                        <button class="pre-order-btn" onclick="addToCart('egg-tart-wood', 1220 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Mooncakes.jpg" alt="Mooncakes">
                        <h3>Mooncakes</h3>
                        <p>Sweet pastry with rich, dense fillings.</p>
                        <span class="price">Rs.1750.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Mooncakes', 1750 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="chinese">
                        <img src="assets/Fried Rice.jpg" alt="Fried Rice">
                        <h3>Chicken fried Rice</h3>
                        <p>Wok-fried rice with veggies and meat.</p>
                        <span class="price">Rs.1590.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Fried Rice', 1590)">Pre-order</button>
                    </div>





                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/biriyaniiii.jpg" alt="Biriyani">
                        <h3>Biriyani</h3>
                        <p>A perfect blend of spices and rice.</p>
                        <span class="price">Rs.1350.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Biriyani', 1350)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/Paratha.jpg" alt="Paratha">
                        <h3>Paratha (5 pieces )</h3>
                        <p>Crispy layers with a soft center.</p>
                        <span class="price">Rs.500.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Paratha', 500)">Pre-order</button>
                    </div>

        

                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/dhosa.jpg" alt="dhosa">
                        <h3>Dhosa</h3>
                        <p>Paper-thin crepe with a burst of flavor.</p>
                        <span class="price">Rs.550.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Dhosa', 550)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/samosa.jpg" alt="samosa">
                        <h3>Samosa</h3>
                        <p>Spiced filling wrapped in crispy perfection.</p>
                        <span class="price">Rs.450.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Samosa', 450)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/Butter Naan.jpg" alt="Butter Naan">
                        <h3>Butter Naan</h3>
                        <p>"Buttery, soft naan with a perfect char.</p>
                        <span class="price">Rs.350.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Butter Naan', 350)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/Pakora.jpg" alt="Pakora">
                        <h3>Pakora</h3>
                        <p>Crispy and flavorful fried delights.</p>
                        <span class="price">Rs.600.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Pakora', 600)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/tikka masala.jpg" alt="tikka masala">
                        <h3>Tikka masala</h3>
                        <p>Spicy marinated meat simmered in velvety sauce.</p>
                        <span class="price">Rs.1750.00</span>
                        <button class="pre-order-btn" onclick="addToCart('tikka masala', 1750)">Pre-order</button>
                    </div>




                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/Butter chicken.jpg" alt="Butter chicken">
                        <h3>Butter chicken</h3>
                        <p>Tender meat in a rich, creamy sauce.</p>
                        <span class="price">Rs.2000.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Butter chicken', 2000)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="Indian">
                        <img src="assets/paani puri.jpg" alt="paani puri">
                        <h3>Paani puri</h3>
                        <p>Crunchy puris soaked in tangy goodness.</p>
                        <span class="price">Rs.1000.00</span>
                        <button class="pre-order-btn" onclick="addToCart('paani puri', 1000)">Pre-order</button>
                    </div>


    



                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Lasagne.jpg" alt="Lasagne">
                        <h3>Lasagne</h3>
                        <p>A classic dish, baked to perfection.</p>
                        <span class="price">Rs.1400.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Lasagne', 1400)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/pizza.jpg" alt="pizza">
                        <h3>Cheesy Pizza</h3>
                        <p>Melted cheese atop a perfect crust.</p>
                        <span class="price">Rs.1800.00</span>
                        <button class="pre-order-btn" onclick="addToCart('pizza', 1800)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Spaghetti alla Carbonara.jpg" alt="spaghetti">
                        <h3>Spaghetti alla Carbonara</h3>
                        <p>Authentic, creamy, and full of flavor.</p>
                        <span class="price">Rs.1600.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Spaghetti alla Carbonara', 1600)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Ribollita.webp" alt="Ribollita">
                        <h3>Ribollita</h3>
                        <p>Rich, slow-cooked vegetables and bread.</p>
                        <span class="price">Rs.950.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Ribollita', 950)">Pre-order</button>
                    </div>


                    
                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/fettuccine al Pomodoro.jpg" alt="fettuccine al Pomodoro">
                        <h3>Fettuccine al Pomodoro</h3>
                        <p>A vibrant mix of tomatoes and fettuccine.</p>
                        <span class="price">Rs.2000.00</span>
                        <button class="pre-order-btn" onclick="addToCart('fettuccine al Pomodoro', 2000)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Pizza Margherita.jpg" alt="Pizza Margherita">
                        <h3>Pizza Margherita</h3>
                        <p>Pure Italian simplicity on a plate.</p>
                        <span class="price">Rs.2200.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Pizza Margherita', 2200)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Tiramisù.jpg" alt="Tiramisù">
                        <h3>Tiramisù</h3>
                        <p>Delicate layers of coffee and cream.</p>
                        <span class="price">Rs.950.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Tiramisù', 950)">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="italian">
                        <img src="assets/Pannacotta.jpg" alt="Pannacotta">
                        <h3>Pannacotta</h3>
                        <p>Rich, creamy, and irresistibly smooth.</p>
                        <span class="price">Rs.1100.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Pannacotta', 1100)">Pre-order</button>
                    </div>





                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Burritos.png" alt="Burritos">
                        <h3>Burritos</h3>
                        <p>A warm, handheld meal with savory fillings.</p>
                        <span class="price">Rs.1300.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Burritos', 1300 )">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Chilaquiles.png" alt="Chilaquiles">
                        <h3>Chilaquiles</h3>
                        <p>Crispy tortillas soaked in spicy salsa.</p>
                        <span class="price">Rs.2370.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Chilaquiles', 2370 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Huevos Rancheros.webp" alt="Huevos Rancheros">
                        <h3>Huevos Rancheros</h3>
                        <p>Eggs topped with spicy tomato salsa.</p>
                        <span class="price">Rs.1600.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Huevos Rancheros', 1600 )">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Mexican Rice.jpg" alt="Mexican Rice">
                        <h3>Mexican Rice</h3>
                        <p>Savory, spiced rice with a bold flavor</p>
                        <span class="price">Rs.1250.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Mexican Rice', 1250)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/tacos with chicken, fresh vegetables.jpg" alt="tacos">
                        <h3>Tacos with chicken, fresh vegetables</h3>
                        <p>Fresh chicken tacos with crunchy veggies.</p>
                        <span class="price">Rs.1650.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Tacos with chicken, fresh vegetables', 1650)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Tostadas.png" alt="Tostadas">
                        <h3>Tostadas</h3>
                        <p>Crunchy base with vibrant, flavorful toppings.</p>
                        <span class="price">Rs.740.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Tostadas', 740 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Enchiladas.jpg" alt="Enchiladas">
                        <h3>Enchiladas</h3>
                        <p>Rolled tortillas with savory sauce and fillings.</p>
                        <span class="price">Rs.1590.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Enchiladas', 1590 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/guacamole-dip.jpg" alt="guacamole-dip">
                        <h3>Guacamole-dip</h3>
                        <p>Rich avocado dip with a hint of lime.</p>
                        <span class="price">Rs.280.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Guacamole-dip', 280)">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="mexican">
                        <img src="assets/Tres Leches Cake.jpg" alt="Tres Leches Cake">
                        <h3>Tres Leches Cake</h3>
                        <p>Sweet, rich cake with a creamy texture.</p>
                        <span class="price">Rs.660.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Tres Leches Cake', 660 )">Pre-order</button>
                    </div>







                    
                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/iced-coffee-with-whipped-cream.jpg" alt="iced-coffee">
                        <h3>Iced-coffee</h3>
                        <p>"Refreshing cold brew with rich flavor.</p>
                        <span class="price">Rs.640.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Iced-coffee', 640  )">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/mango-juice.jpg" alt="mango-juice">
                        <h3>Mango-juice</h3>
                        <p>Sweet, juicy mango for a fruity burst.</p>
                        <span class="price">Rs.690.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Mango-juice', 690 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/lime-mojito.jpg" alt="lime-mojito">
                        <h3>Lime-mojito</h3>
                        <p>Zesty lime with minty freshness.</p>
                        <span class="price">Rs.420.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Lime-mojito', 420  )">Pre-order</button>
                    </div>


                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/indian masala chai.jpg" alt="indian masala chai">
                        <h3>Indian masala chai</h3>
                        <p>A warm blend of tea and Indian spices.</p>
                        <span class="price">Rs.220.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Indian masala chai', 220  )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/iced-milo.jpg" alt="iced-milo">
                        <h3>Iced-milo</h3>
                        <p>A refreshing iced version of your favorite Milo.</p>
                        <span class="price">Rs.780.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Iced-milo', 780 )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/faluda.jpg" alt="faluda">
                        <h3>Faluda</h3>
                        <p>"Creamy faluda with rose and vermicelli.</p>
                        <span class="price">Rs.375.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Faluda', 375  )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/chocolate-milkshake.jpg" alt="chocolate-milkshake">
                        <h3>Chocolate-milkshake</h3>
                        <p>Smooth, cold, and full of chocolatey goodness.</p>
                        <span class="price">Rs.830.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Chocolate-milkshake', 830  )">Pre-order</button>
                    </div>



                    <div class="menu-card" data-cuisine="beverages">
                        <img src="assets/banana-blueberry-smoothie.jpg" alt="banana-blueberry-smoothie">
                        <h3>Banana & blueberry smoothie</h3>
                        <p>Refreshing smoothie with banana and berries.</p>
                        <span class="price">Rs.850.00</span>
                        <button class="pre-order-btn" onclick="addToCart('Banana & blueberry smoothie', 850  )">Pre-order</button>
                    </div>









                
                   
                 </div>
            </section>










            <div class="special-food-section">
                <h2>Today's Specials</h2>
                    <div class="menu-items">
                        <div class="menu-card">
                            <img src="assets/image2.jpg" alt="Lobster Thermidor">
                            <h3>Lobster Thermidor</h3>
                            <p>A luxurious French dish made with creamy lobster meat and topped with melted cheese.</p>
                            <span class="price">Rs.35.99</span>
                            <button class="pre-order-btn" onclick="addToCart('Lobster Thermidor', 35.99)">Pre-order</button>
                        </div>
                            
                        <div class="menu-card">
                            <img src="assets/high-angle-delicious-pasta-with-truffle.jpg" alt="Truffle Pasta">
                            <h3>Truffle Pasta</h3>
                            <p>A delicate pasta dish infused with aromatic truffles and finished with a light cream sauce.</p>
                            <span class="price">Rs.25.99</span>
                            <button class="pre-order-btn" onclick="addToCart('Truffle Pasta', 25.99)">Pre-order</button>
                        </div>
            
                        <div class="menu-card">
                            <img src="assets/grilled-beef-steak-dark-wooden-surface.jpg" alt="Ribeye Steak">
                            <h3>Grilled Ribeye Steak</h3>
                            <p>Juicy ribeye steak grilled to perfection, served with garlic butter and herbs.</p>
                            <span class="price">Rs.29.99</span>
                            <button class="pre-order-btn" onclick="addToCart('Grilled Ribeye Steak', 29.99)">Pre-order</button>
                        </div>
                    </div>
               
                  
            </div>
            </section>
        
            <!-- Cart Modal (hidden by default) -->
            <div id="cart-modal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeCart()">&times;</span>
                    <h2>Your Order Summary</h2>
                    <div id="cart-items"></div>
                    <button onclick="submitOrder()">Submit Order</button>
                </div>
            </div>
        
          

            <script>
                window.cart = [];

                // Function to redirect to login page if not signed in
                function ensureSignedIn(callback) {
                    if (!<?php echo json_encode($is_logged_in); ?>) {
                        alert("Please sign in to pre-order.");
                        window.location.href = "sign-in.php";  // Redirect to sign-in page
                    } else {
                        callback();  // Proceed if user is signed in
                    }
                }

                function addToCart(item, price) {
                ensureSignedIn(() => {
                    // Check if the item is already in the cart
                    let found = cart.find(prod => prod.name === item);
                    if (found) {
                        found.quantity += 1;  // Increase the quantity if the item already exists
                    } else {
                        const cartItem = { name: item, price: price, quantity: 1 };
                        cart.push(cartItem);
                    }
                    updateCart();
                    alert(`${item} has been added to your cart.`);
                });
                }
                // Function to update the cart display
                function updateCart() {
                    const cartCount = document.getElementById("cart-count");
                    cartCount.textContent = cart.reduce((acc, item) => acc + item.quantity, 0); // Update to count by quantity
            
                    const cartItems = document.getElementById("cart-items");
                    cartItems.innerHTML = ""; // Clear previous items
            
                    cart.forEach((item, index) => {
                        const div = document.createElement("div");
                        div.className = 'cart-item';
                        div.innerHTML = `
                            <span>${item.name} - Rs.${item.price}</span>
                            <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                            <button onclick="removeFromCart(${index})">Remove</button>
                        `;
                        cartItems.appendChild(div);
                    });
                }
            
                // Function to update quantity
                function updateQuantity(index, quantity) {
                    const item = cart[index];
                    if (quantity <= 0) {
                        cart.splice(index, 1);  // Remove item from cart if quantity is 0 or less
                    } else {
                        item.quantity = parseInt(quantity);  // Update the quantity
                    }
                    updateCart();
                }
            
                // Function to remove an item from the cart
                function removeFromCart(index) {
                    cart.splice(index, 1);  // Remove item from cart
                    updateCart();
                }
            
                // Function to show the cart modal
                function toggleCart() {
                    const modal = document.getElementById("cart-modal");
                    modal.style.display = modal.style.display === "block" ? "none" : "block";
                }
            
                // Function to close the cart modal
                function closeCart() {
                    const modal = document.getElementById("cart-modal");
                    modal.style.display = "none";
                }
            
                // Function to submit the order
                function submitOrder() {
                    if (cart.length === 0) {
                        alert("Your cart is empty.");
                        return;
                    }
                    alert("Order submitted successfully!");
                    cart = []; // Clear cart after submission
                    updateCart();
                    closeCart();
                }
            
                // Function to filter items by cuisine
                function filterCuisine(cuisine) {
                    const items = document.querySelectorAll(".menu-card");
                    items.forEach(item => {
                        if (item.getAttribute("data-cuisine") === cuisine || cuisine === "all") {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                }
            
                // Function to search by cuisine name in the search bar
                function searchCuisine() {
                    const searchValue = document.getElementById("search").value.toLowerCase();
                    const items = document.querySelectorAll(".menu-card");
            
                    items.forEach(item => {
                        const cuisineName = item.querySelector("h3").textContent.toLowerCase();
                        if (cuisineName.includes(searchValue)) {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                }
            
                // Simulate successful login for demo purposes (this should be handled with server-side logic)
                function simulateLogin() {
                    sessionStorage.setItem("userLoggedIn", true);
                    alert("Login Successfully");
                }
            </script>
            
   
       
        












        



 <!-- Footer -->
<footer>
    <div class="footer-container">
        <!-- Left section: Contact Info -->
        <div class="footer-contact">
            <img src="THE GALLERY (12).png" alt="Logo" class="footer-logo">
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
                                                       
