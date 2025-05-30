
<?php
    session_start();
    include("php/config.php");

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);



        // Query to get the user by email
        $result = mysqli_query($con, "SELECT * FROM users WHERE email='$email'") or die("Select error");

        $row = mysqli_fetch_assoc($result);
       

        if (is_array($row) && !empty($row)) {
            // Verify the hashed password
            
                // Password is correct, set session variables
                $_SESSION['valid'] = $row['email'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['phonenumber'] = $row['phonenumber'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];

                // Redirect to index.php
                header("Location: index.php");
                exit();
            
        } else {
            // No such email found
            echo "<div class='message'><p>Wrong Email or password</p></div><br>";
            echo "<a href='sign-in.php'><button class='btn'>Go Back</button></a>";
        }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="sign-in.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>
<body>

    <div class="login-container"  style="display: flex;">
       

        <form action="" method="POST">
            <h2>Sign In </h2> <!-- Moved to top -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Sign In" name="submit">
            <div class="signup-link">
                <p>Don't have an account? <a href="sign-up.php" onclick="showSignUp()">Sign up here</a></p>

            </div>
        </form>
        
    </div>

</body>
</html>