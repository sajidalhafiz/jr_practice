<?php

include 'db.php';
include 'utility.php';


// Registration process
if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate inputs
    if (empty($fullname) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "<script>alert('All fields are required.');</script>";
        // header('location:register.php');
    } elseif (!validateEmail($email)) {
        echo "<script>alert('Invalid email address.');</script>";
    } elseif ($password !== $confirmPassword) {
        echo "<script>alert('Password and confirm password do not match.');</script>";
    } elseif (!validatePassword($password)) {
        echo "<script>alert('Invalid password. It should be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character.');</script>";
    } else {
        // Check if email already exists
        $existingUserQuery = "SELECT * FROM user_info WHERE email = '$email'";
        $existingUserResult = mysqli_query($conn, $existingUserQuery);

        if (mysqli_num_rows($existingUserResult)) {
            echo "<script>alert('Email already exists.');</script>";
        } else {
            // Insert user data into the database
            
            $insertQuery = "INSERT INTO user_info (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>alert('Registration successful!!!');</script>";
                header('location:login.php');
            } else {
                echo "Error:"  . mysqli_error($conn);
            }
        }
    }




    // Close the database connection
    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/fav-icon.svg" type="image/x-icon">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/light-dark.css">
</head>

<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="mb-4">Registration</h2>
                <form method="POST" action="register.php">
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                        <div class="d-flex justify-content-between ">
                            <p>Already have account?</p>
                            <a class="px-3" href="login.php">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/light-dark.js"></script>
</body>

</html>