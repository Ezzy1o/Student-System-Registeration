<?php

    session_start();

    include 'admin.php';
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    if($_SESSION['username']) {
        echo "Welcome " . $username;
        echo "<br>";
        echo "Hello " . $email;
    } else {
        echo "You are not logged in";
    }
?>