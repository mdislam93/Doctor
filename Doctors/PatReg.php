
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
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

        input[type="text"], input[type="tel"], input[type="password"], select, textarea, input[type="submit"] {
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
        <h2>Patient Registration</h2>
        <form action="register_patient.php" method="POST" onsubmit="return validateForm()">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" required>
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
            <input type="submit" value="Register Patient">
        </form>
    </div>
    <script>
        function validateForm() {
            var fullname = document.getElementById("fullname").value;
            var primaryContact = document.getElementById("primary_contact_number").value;
            var secondaryContact = document.getElementById("secondary_contact_number").value;
            var address = document.getElementById("address").value;
            var adharcard = document.getElementById("adharcard_number").value;
            var pancard = document.getElementById("pancard_number").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            
            var phonePattern = /^\d{10}$/; 
            var adharcardPattern = /^\d{12}$/; 
            var pancardPattern = /^[A-Z]{5}[0-9]{4}[A-Z]$/; 

            
            if (fullname.trim() === "") {
                alert("Please enter your full name.");
                return false;
            }

            
            if (!phonePattern.test(primaryContact)) {
                alert("Please enter a valid 10-digit primary contact number.");
                return false;
            }

            if (secondaryContact.trim() !== "" && !phonePattern.test(secondaryContact)) {
                alert("Please enter a valid 10-digit secondary contact number.");
                return false;
            }

            
            if (address.trim() === "") {
                alert("Please enter your address.");
                return false;
            }

            
            if (!adharcardPattern.test(adharcard)) {
                alert("Please enter a valid 12-digit Adharcard number.");
                return false;
            }
            if (!pancardPattern.test(pancard)) {
                alert("Please enter a valid PAN card number (e.g., ABCDE1234F).");
                return false;
            }
            if (username.trim() === "") {
                alert("Please enter your username.");
                return false;
            }
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>

