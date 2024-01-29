<!-- login form code -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Form</title>
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

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>User Login</h2>
        <form class="login-form" action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html> -->
<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Register</title>
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

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .register-link {
            margin-top: 15px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Login</h2>
        <div class="form-container">
            <form action="home.php" method="post">
                <input type="email" name="email" placeholder="Enter your email"required>
                <!-- <input type="text" name="username" placeholder="Username" required> -->
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                
            </form>
            <a class="register-link" href="register.php">Don't have an account? Register here</a>
        </div>
    </div>

    <?php
// Establishing a database connection
$conn = mysqli_connect('localhost', 'root', '', 'registration') or die(mysqli_connect_error());

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic input validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Sanitize input to prevent SQL Injection
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        $sql = "INSERT INTO `login`(`email`, `password`) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Login Successfully'); window.location.href='home.php';</script>";
                exit();
            } else {
                echo "<script>alert('Failed to register');</script>";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Database error');</script>";
        }
    } else {
        echo "<script>alert('Invalid email format');</script>";
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>

</body>
</html>
