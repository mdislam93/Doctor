<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "doctor";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $primary_contact_number = $_POST["primary_contact_number"];
    $secondary_contact_number = $_POST["secondary_contact_number"];
    $address = $_POST["address"];
    $adharcard_number = $_POST["adharcard_number"];
    $pancard_number = $_POST["pancard_number"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];

$sql = "INSERT INTO patients (fullname, primary_contact_number, secondary_contact_number, address, adharcard_number, pancard_number, username, password, status) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $fullname, $primary_contact_number, $secondary_contact_number, $address, $adharcard_number, $pancard_number, $username, $password, $status);


    if ($stmt->execute()) {
        
        echo "Patient registered successfully!";
        header("Location: DocReg.php");
    } else {
        
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
