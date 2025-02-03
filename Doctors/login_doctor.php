<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "doctor";


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    
    $sql = "SELECT username, PASSWORD FROM doctors1 WHERE username = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($adminUsername, $adminPassword);
        $stmt->fetch();
        if ($input_username === $adminUsername && $input_password === $adminPassword) {
            
            header("Location: DisplayList.php");
            exit();
        } else {
            echo "Login failed. Please check your username and password.";
        }
    } else {
        echo "Error: " . $stmt->error; 
    }
}
$conn->close();
?>
