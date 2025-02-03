<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocate Patient</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 100%;
                margin: 0;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Allocate Patient</h2>
        <form action="DoctorLoginPanel.php" method="POST">
        <label for="disease_name">Patient Name:</label>
        <select name="disease_name" id="disease_name">
        <?php
            
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            $conn = new mysqli($hostname, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT fullname FROM patients";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $disease_name = $row["fullname"];
                    echo "<option value='$disease_name'>$disease_name</option>";
                }
             } else {
                    echo "<option value=''>No diseases available</option>";
                 }
            $conn->close();
            ?>
        </select>
        <label for="disease_name">Status:</label>
        <select name="disease_name" id="disease_name">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            $conn = new mysqli($hostname, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT status FROM doctor_patient_allocation1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $disease_name = $row["status"];
                    echo "<option value='$disease_name'>$disease_name</option>";
                }
             } else {
                    echo "<option value=''>No diseases available</option>";
                 }
            $conn->close();
            ?>
        </select>
        
        </form>
    </div>
</body>
</html>

