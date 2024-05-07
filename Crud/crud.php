<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "***";
$database = "db_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert new user
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'insert') {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, phone_number, password_hash) VALUES ('$full_name', '$phone_number', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Find user by ID
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'find' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo "User ID: " . $user['id'] . "<br>";
        echo "Full Name: " . $user['full_name'] . "<br>";
        echo "Phone Number: " . $user['phone_number'] . "<br>";
    } else {
        echo "User not found.";
    }
}

// Update user by ID
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET full_name = '$full_name', phone_number = '$phone_number', password_hash = '$password' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete user by ID
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close connection
$conn->close();

?>
