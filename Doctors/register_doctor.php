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
    $fullname = $_POST["fullname"];
    $email_id = $_POST["email_id"];
    $primary_contact_number = $_POST["primary_contact_number"];
    $secondary_contact_number = $_POST["secondary_contact_number"];
    $address = $_POST["address"];
    $adharcard_number = $_POST["adharcard_number"];
    $pancard_number = $_POST["pancard_number"];
    $joining_date = $_POST["joining_date"];
    $speciality_id = $_POST["speciality_id"]; 
    $visit_time_from = $_POST["visit_time_from"];
    $visit_time_to = $_POST["visit_time_to"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];
    $sql = "INSERT INTO doctors1 (fullname, email_id, primary_contact_number, secondary_contact_number, address, adharcard_number, pancard_number, joining_date, speciality_id, visit_time_from, visit_time_to, username, password, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssi", $fullname, $email_id, $primary_contact_number, $secondary_contact_number, $address, $adharcard_number, $pancard_number, $joining_date, $speciality_id, $visit_time_from, $visit_time_to, $username, $password, $status);

    if ($stmt->execute()) {
        header("Location: ListAllocatedPatients.php");
        exit(); 
    } else {
        
        error_log("Error: " . $stmt->error);
        
        echo "Doctor registration failed. Please try again later.";
    }

    $stmt->close();
}


$conn->close();
?>
