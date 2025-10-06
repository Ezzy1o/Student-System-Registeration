<?php
session_start();
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = login($username, $password);

    if ($result) {
        // Save user info in session
        $_SESSION['username'] = $result['username'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['fullname'] = $result['fullname'];

        // Redirect to dashboard or home
        header('Location: dashboard.php');
        exit;
    } else {
        echo "<script>alert('Login Failed! Invalid username or password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System - Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(41, 31, 31, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            margin: 20px;
            border: 2px solid #e0e0e0;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .form-container {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #000000;
            font-size: 1em;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            background-color: #f9f9f9;
        }

        input:focus {
            outline: none;
            border-color: #333;
            background-color: white;
        }

        .btn {
            background-color: #333;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin: 10px 0;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79,91,213,0.3);
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container { margin: 10px; }
            .form-container { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Registration System</h1>
            <p>Login to access the system</p>
        </div>

        <div class="form-container">
            <!-- ✅ Send form back to same page -->
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>

            <div class="links">
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
