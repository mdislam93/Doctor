<?php
$host = "localhost";
$username = "root";
$password = " ";
$database = "doctor";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$patientId = $_POST['patient'];
$doctorId = $_POST['doctor'];
$query = "UPDATE patients SET doctor_id = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $doctorId, $patientId);
if ($stmt->execute()) {
    echo "Doctor allocated to the patient successfully!";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
