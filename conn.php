<?php
    // Database connection configuration
    $servername = '127.0.0.1';
    $dbname = 'student_system';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

function login($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql); // execute the query
    $user = $result->fetch_assoc(); // get the user data
    if ($user && isset($user['password']) && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

function register($fullname, $username, $email, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    return $conn->query($sql); // execute the query
}
?>