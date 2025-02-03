<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocate Doctor to Patient</title>
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

        select, input[type="text"], input[type="datetime-local"], input[type="submit"] {
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
        <h2>Allocate Doctor to Patient</h2>
        <form action="process_allocation.php" method="POST">
        <label for="doctor_id">Doctor:</label>
        <select name="doctor_id" id="doctor_id">
        <?php
        
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "doctor";

       
         $conn = new mysqli($hostname, $username, $password, $database);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT id, fullname FROM doctors1";
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $doctor_id = $row["id"];
                $doctor_name = $row["fullname"];
                echo "<option value='$doctor_id'>$doctor_name</option>";
            }
        } else {
              echo "<option value=''>No doctors available</option>";
        }

        
        $conn->close();
        ?></select>
        <label for="patient_id">Patient:</label>
        <select name="patient_id" id="patient_id">
        <?php
        
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "doctor";

        
        $conn = new mysqli($hostname, $username, $password, $database);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, fullname FROM patients";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $patient_id = $row["id"];
                $patient_name = $row["fullname"];
                echo "<option value='$patient_id'>$patient_name</option>";
            }
          } else {
            echo "<option value=''>No patients available</option>";
          }
           $conn->close();
            ?>
            </select>

            <br>
            <label for="disease_name">Disease Name:</label>
            <input type="text" name="disease_name" id="disease_name" required>
            <br>
            <label for="appointment_datetime">Appointment Date and Time:</label>
            <input type="datetime-local" name="appointment_datetime" id="appointment_datetime" required>
            <br>
            <label for="last_appointment_datetime">Last Appointment Date and Time:</label>
            <input type="datetime-local" name="last_appointment_datetime" id="last_appointment_datetime" required>
            <br>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="0">Pending</option>
                <option value="1">Treatment Completed</option>
                <option value="2">Processing</option>
                <option value="3">Hold</option>
            </select>
            <br>
            <input type="submit" value="Allocate">
        </form>
    </div>
</body>
</html>
