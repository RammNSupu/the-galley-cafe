<?php
include("php/config.php");
session_start(); // Start the session

$is_logged_in = isset($_SESSION['email']);
$email = $is_logged_in ? $_SESSION['email'] : '';
$fullName = '';  // Initialize fullName
$phoneNumber = ''; // Initialize phoneNumber

            if ($is_logged_in){
              $verify_query = mysqli_query($con,"SELECT phonenumber, fullname FROM users WHERE email='$email' ") ;


                if ($verify_query) {
                  // Fetch the result
                  $user_data = mysqli_fetch_assoc($verify_query);

                  // Check if a user was found
                  if ($user_data) {
                      $phoneNumber = $user_data['phonenumber']; 
                      $fullName= $user_data['fullname'];
                  } else {
                      // Handle case when no user is found
                      echo "No user found with this email.";
                  }
                } else {
                  // Handle query error
                  echo "Error executing query: " . mysqli_error($con);
                }
            }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reservation.css">
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




          <div class="container">
            <div class="header">
              <img src="assets/image2.jpg" alt="Restaurant Image" class="header-img">
              <h5>MAKE YOUR </h5>
              <h2>RESERVATION</h2>
            </div>
            
            <?php

            include("php/config.php");
            if (isset($_POST['submit'])) 
            {

              if (!$is_logged_in) {
                echo "<script>alert('You must be logged in to make a reservation. Please sign in.');</script>";
                echo "<script>window.location.href = 'sign-in.php';</script>"; // Redirect to sign-in page
                exit(); // Terminate script execution after redirecting
            }

                $fullName =  $_POST['fullName'];
                $mobileNumber =  $_POST['mobileNumber'];
                $reservation_date =  $_POST['reservation_date'];
                $email = $_POST['email'];
                $reservation_time =$_POST['reservation_time'];
                $no_of_guest =  $_POST['no_of_guests'];
                $message = $_POST['message']; // Default role for sign-up
               
              
  
               
                
                mysqli_query($con,"INSERT INTO reservations(fullName,email,mobileNumber,reservation_date,reservation_time,no_of_guests,message) VALUES ('$fullName', ' $email', ' $mobileNumber' , '$reservation_date','$reservation_time' ,'$no_of_guest','$message')") or die("Error Occured") ;
                    echo "<div class='message'>
                                <p>Reservation successfully! </p>
                        </div> <br> " ;

                    

                

            }else{

                ?>





            <form class="reservation-form" action="" method="post">
              
              
              <div class="form-group">
                <label for="fullName">Full Name <span>*</span></label>
                <input type="text" id="fullName" name="fullName" value="<?php echo htmlspecialchars($fullName); ?>" <?php echo $is_logged_in ? 'readonly' : ''; ?> required>

                <!-- <input type="text" id="fullName" name="fullName" value="<?php echo $fullName; ?>"  <?php echo $is_logged_in ? 'readonly' : ''; ?> required> -->
              </div>
        
              <div class="form-group">
                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" <?php echo $is_logged_in ? 'readonly' : ''; ?> required>

                <!-- <input type="email" id="email" name="email" value="<?php echo $email; ?>"  <?php echo $is_logged_in ? 'readonly' : ''; ?>  required> -->
              </div>
        
              <div class="form-group">
                <label for="mobileNumber">Mobile Number <span>*</span></label>
                <input type="text" id="mobileNumber" name="mobileNumber" value="<?php echo htmlspecialchars($phoneNumber); ?>" <?php echo $is_logged_in ? 'readonly' : ''; ?> required>

                <!-- <input type="text" id="mobileNumber" name="mobileNumber" value="<?php echo $phoneNumber; ?>"  <?php echo $is_logged_in ? 'readonly' : ''; ?> required> -->
              </div>
        
              <div class="form-group">
                <label for="reservationDate">Reservation Date <span>*</span></label>
                <input type="date" id="reservationDate" name="reservation_date" required>
              </div>
        
              <div class="form-group">
                <label for="reservationTime">Reservation Time <span>*</span></label>
                <input type="time" id="reservationTime" name="reservation_time" required>
              </div>
        
              <div class="form-group">
                <label for="guests">Number of Guests</label>
                <input type="number" id="guests" name="no_of_guests" min="1" value="1">
              </div>
        
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>
              </div>
        
              <div class="form-group">
                <label for="tableCapacity">Available Tables</label>
                <select id="tableCapacity" name="tableCapacity">
                  <option value="2">Table for 2</option>
                  <option value="4">Table for 4</option>
                  <option value="6">Table for 6</option>
                  <!-- Add more options as needed -->
                </select>
                <button type="button" onclick="checkAvailableTables()">Check Available Tables</button>
              </div>
        
              <div class="form-group">
                <label for="parkingAvailability">Parking Availability</label>
                <p id="parkingAvailability">-</p>
              </div>
        

              <button type="submit" class="submit-button" name="submit">+ Submit</button>

              <!-- <button type="submit" class="submit-button" name="submit" >+ Submit</button> -->
            </form>

          
            <?php } ?>
          </div> <br><br><br>
     
          


<script>
    
// Simulated data for table and parking availability
let tableAvailability = {
  "2": 5,  // 5 tables for 2 people
  "4": 3,  // 3 tables for 4 people
  "6": 2   // 2 tables for 6 people
};

let parkingSlotsAvailable = 10;  // Assume there are 10 parking slots initially

// Function to check available tables based on the selected group size
function checkAvailableTables() {
  const tableCapacity = document.getElementById("tableCapacity").value;
  const availableTables = tableAvailability[tableCapacity];

  // Display the available tables count
  if (availableTables && availableTables > 0) {
    alert(`There are ${availableTables} table(s) available for ${tableCapacity} people.`);
  } else {
    alert(`Sorry, no tables available for ${tableCapacity} people at the moment.`);
  }
}

// Real-time parking slot updates
function updateParkingSlots() {
  const parkingDisplay = document.getElementById("parkingAvailability");

  // Simulate parking slot changes (e.g., decrease by 1 every few seconds)
  setInterval(() => {
    if (parkingSlotsAvailable > 0) {
      parkingSlotsAvailable--;  // Decrease by 1 every interval (simulate parking slots being taken)
    }
    parkingDisplay.innerText = `${parkingSlotsAvailable} parking slots available`;
  }, 5000);  // Update every 5 seconds
}

// // Function to handle form submission
// document.querySelector('.reservation-form').addEventListener('submit', function(event) {
//   event.preventDefault();  // Prevent the default form submission

//   const fullName = document.getElementById('fullName').value;
//   const email = document.getElementById('email').value;
//   const mobileNumber = document.getElementById('mobileNumber').value;
//   const reservationDate = document.getElementById('reservationDate').value;
//   const reservationTime = document.getElementById('reservationTime').value;
//   const guests = document.getElementById('guests').value;
  
//   // Simulate form validation (you can add more advanced validation as needed)
//   if (fullName && email && mobileNumber && reservationDate && reservationTime && guests  > 0) {
//     alert('Reservation successful!');
//   } else {
//     alert('Reservation unsuccessful. Please fill in all the required fields.');
//   }
// });

// Call the function to start updating parking slots in real-time
updateParkingSlots();



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
                                                       













