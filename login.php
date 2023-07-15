<?php

session_start();


// Login process
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate inputs
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {

        include 'db.php';


        $select = "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $select);


        if ($email == 'admin@gmail.com' && $password == 'admin123') {

            // $_SESSION['admin_name'] = $row['name'];
            header('location:admin_dashboard.php');
        } elseif (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result);
            if ($email == $row['email'] && $password == $row['password']) {
                // echo "Login successful!";
                $_SESSION['username'] = $row['fullname'];
                header('location:home.php');
            }
        } else {
            echo "<script>alert('Incorrect Email or Password')</script>";
        }

        // Close the database connection
        mysqli_close($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/fav-icon.svg" type="image/x-icon">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/light-dark.css">
</head>

<body>
    <div class="container p-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="mb-4">Login</h2>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        <div class="d-flex justify-content-between ">
                            <p>Don't have account?</p>
                            <a class="px-3" href="register.php">Register</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/light-dark.js"></script>
</body>

</html>