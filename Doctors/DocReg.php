<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
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

        input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="time"], input[type="password"], select, textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
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
        <h2>Doctor Registration</h2>
        <form action="register_doctor.php" method="POST" onsubmit="return validateForm()">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" required>
            <br>
            <label for="email_id">Email:</label>
            <input type="email" name="email_id" id="email_id" required>
            <br>
            <label for="primary_contact_number">Primary Contact Number:</label>
            <input type="tel" name="primary_contact_number" id="primary_contact_number" required>
            <br>
            <label for="secondary_contact_number">Secondary Contact Number:</label>
            <input type="tel" name="secondary_contact_number" id="secondary_contact_number">
            <br>
            <label for="address">Address:</label>
            <textarea name="address" id="address" rows="4" required></textarea>
            <br>
            <label for="adharcard_number">Adharcard Number:</label>
            <input type="text" name="adharcard_number" id="adharcard_number" required>
            <br>
            <label for="pancard_number">Pancard Number:</label>
            <input type="text" name="pancard_number" id="pancard_number" required>
            <br>
            <label for="joining_date">Joining Date:</label>
            <input type="date" name="joining_date" id="joining_date" required>
            <br>
            <label for="speciality_id">Speciality:</label>
            <select name="speciality_id" id="speciality_id">
                <option value="1">Cardiologist</option>
                <option value="2">Dermatologist</option>
                
            </select>
            <br>
            <label for="visit_time_from">Visit Time From:</label>
            <input type="time" name="visit_time_from" id="visit_time_from" required>
            <br>
            <label for="visit_time_to">Visit Time To:</label>
            <input type="time" name="visit_time_to" id="visit_time_to" required>
            <br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            <br>
            <input type="submit" value="Register Doctor">
        </form>
    </div>
    
    <script>
        function validateForm() {
            var fullname = document.getElementById("fullname").value;
            var email = document.getElementById("email_id").value;
            var primaryContact = document.getElementById("primary_contact_number").value;
            var address = document.getElementById("address").value;
            var adharcard = document.getElementById("adharcard_number").value;
            var pancard = document.getElementById("pancard_number").value;
            var joiningDate = document.getElementById("joining_date").value;
            var visitTimeFrom = document.getElementById("visit_time_from").value;
            var visitTimeTo = document.getElementById("visit_time_to").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (fullname.trim() === "") {
                alert("Please enter your full name.");
                return false;
            }

            if (email.trim() === "") {
                alert("Please enter your email.");
                return false;
            }

            if (primaryContact.trim() === "") {
                alert("Please enter your primary contact number.");
                return false;
            }

            if (address.trim() === "") {
                alert("Please enter your address.");
                return false;
            }

            if (adharcard.trim() === "") {
                alert("Please enter your Adharcard number.");
                return false;
            }

            if (pancard.trim() === "") {
                alert("Please enter your Pancard number.");
                return false;
            }

            if (joiningDate.trim() === "") {
                alert("Please select your joining date.");
                return false;
            }

            if (visitTimeFrom.trim() === "") {
                alert("Please select your visit time from.");
                return false;
            }

            if (visitTimeTo.trim() === "") {
                alert("Please select your visit time to.");
                return false;
            }

            if (username.trim() === "") {
                alert("Please enter your username.");
                return false;
            }

            if (password.trim() === "") {
                alert("Please enter your password.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
