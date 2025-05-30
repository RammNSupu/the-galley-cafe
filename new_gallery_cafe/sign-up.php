<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="sign-up.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>





   <!-- Sign-Up Form -->
<div class="signup-container">
    <?php

        include("php/config.php");
        if (isset($_POST['submit'])) 
        {
            $fullname =  $_POST['fullname'];
            $phonenumber =  $_POST['phonenumber'];
            $username =  $_POST['username'];
            $email = $_POST['email'];
            $password =$_POST['password'];
            $confirm_password =  $_POST['confirm_password'];
            $role = $_POST['role']; // Default role for sign-up
            $emp_id = $_POST['emp_id']; 

            //verify the unique email
            $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email' ") ;
            $employee_id_exists = false; // Flag for employee ID existence

            if ($role === 'admin' || $role === 'operational staff') {
                // Check if Employee ID exists
                $verify_query_emp = mysqli_query($con, "SELECT emp_id FROM employee WHERE emp_id='$emp_id'");

                if (mysqli_num_rows($verify_query_emp) > 0) {
                    $employee_id_exists = true; // Employee ID exists
                } else {
                    echo "<div class='message'>
                            <p>This Employee ID is not valid.</p>
                          </div><br>";
                }
            }

            if (mysqli_num_rows($verify_query) != 0) 
            {
                echo "<div class='message'>
                        <p>This email is already used, try another one please!</p>
                      </div><br>";

                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
            } 
            elseif (!$employee_id_exists && ($role === 'admin' || $role === 'operational staff')) 
            {
                // If role requires employee ID and it does not exist
                echo "<div class='message'>
                        <p>This Employee ID is not valid.</p>
                      </div><br>";
                      
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
            } 


            // if (mysqli_num_rows($verify_query) !=0) 
            // {
            //     echo "<div class='message'>
            //                 <p>This email is used, Try another one please! </p>
            //         </div> <br> " ;

            //     echo "<a href='javascript:self.history.back()>' <button class='btn'> Go Back </button>";
            elseif ($password != $confirm_password){
                    echo "<div class='message'>
                            <p>The entered passwors are not matche! </p>
                    </div> <br> " ;

                echo "<a href='javascript:self.history.back()>' <button class='btn'> Go Back </button>";
            }

            else{
                mysqli_query($con,"INSERT INTO users(fullname,phonenumber,username,password,email,role) VALUES ('$fullname', ' $phonenumber', ' $username' , '$password','$email' ,'$role')") or die("Error Occured") ;
                echo "<div class='message'>
                            <p>Registration successfully! </p>
                    </div> <br> " ;

                echo "<a href='sign-in.php'> <button class='btn'> Sign-in Now </button>";

            }

        }else{

            ?>

    
        


        



    <form action="" method="POST">

        <h2>Sign Up </h2>  

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="fullname" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phonenumber" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="signup-email" name="email" required>

        <label for="role">Select a role:</label>
        <select id="role" name="role"  onchange="checkRole()">
        <option value="customer">Customer</option>
        <option value="admin">Admin</option>
        <option value="operational staff">Operational Staff</option>
        </select>


        <!-- Hidden input for Employee ID -->
        <div id="employeeIdDiv" style="display: none;">
            <label for="employeeId">Employee ID:</label>
            <input type="text" id="employeeId" name="emp_id">
        </div>

        
        
        <label for="password">Password:</label>
        <input type="password" id="signup-password" name="password" required>
        
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm_password" required>
        
        <input type="submit" value="Sign Up" name="submit">
        <div class="signin-link">
            <p>Already have an account? <a href="sign-in.php" onclick="showSignIn()">Sign in here</a></p>
        </div>
    </form>

    <?php } ?>


</div>


<script>
function checkRole() {
    var role = document.getElementById("role").value;
    var employeeIdDiv = document.getElementById("employeeIdDiv");

    // Check if the selected role is 'admin' or 'operational staff'
    if (role === "admin" || role === "operational staff") {
        employeeIdDiv.style.display = "block"; // Show Employee ID field
    } else {
        employeeIdDiv.style.display = "none"; // Hide Employee ID field
    }
}
</script>   



    
</body>
</html>