<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .welcome {
            float: right;
            color: white;
            padding: 14px 16px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="admin.php">Admin</a>
        <a href="logout.php">Logout</a>


        <!-- ✅ Show who is logged in -->
        <?php if (isset($_SESSION['username'])): ?>
            <div class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</div>
        <?php else: ?>
            <div class="welcome">Not logged in</div>
        <?php endif; ?>
    </div>
</body>
</html>
