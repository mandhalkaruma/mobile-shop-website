<!-- registration form code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .registration-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .registration-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>User Registration</h2>
        <form class="registration-form" action="login.php" method="post">
            <input type="text" name="username" placeholder="Enter Your Full Name" required>
            <input type="tel" name="Mobile_No" placeholder="Enter your Mobile_No"required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <!-- <input type="password" name="confirm_password" placeholder="Confirm Password" required> -->
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `form`(`name`, `email`, `moblie_no`, `password`) VALUES (?, ?, ?, ?)";

    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $mobile_no, $password);
        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>alert('Registered Successfully'); window.location.href='home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to register');</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Failed to prepare statement');</script>";
    }

    mysqli_close($conn);
} else {
    echo "<script>alert('Invalid form submission');</script>";
}
?>
