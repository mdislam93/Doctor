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
    $doctor_id = $_POST["doctor_id"];
    $patient_id = $_POST["patient_id"];
    $disease_name = $_POST["disease_name"];
    $appointment_datetime = $_POST["appointment_datetime"];
    $last_appointment_datetime = $_POST["last_appointment_datetime"];
    $status = $_POST["status"];

    
    $sql = "INSERT INTO doctor_patient_allocation1 (doctor_id, patient_id, disease_name, appointment_datetime, last_appointment_datetime, status) VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iissss", $doctor_id, $patient_id, $disease_name, $appointment_datetime, $last_appointment_datetime, $status);

    if ($stmt->execute()) {
        print("Patient registered successfully!");
        
        exit(); 
    } else {
        
        error_log("Error: " . $stmt->error);
        
        echo "Allocation failed. Please try again later.";
    }

    $stmt->close();
}
$conn->close();
?>
