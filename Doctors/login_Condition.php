<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "doctor";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM doctors1 LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $adminUsername = $row['username'];
    $adminPassword = $row['PASSWORD'];
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];
    if ($inputUsername === $adminUsername && $inputPassword === $adminPassword) {
        header("Location: DisplayList.php");

    } else {
        echo "Login failed. Please check your username and password.";
    }
} else {
    echo "Admin data not found in the database.";
}


$conn->close();
?>
