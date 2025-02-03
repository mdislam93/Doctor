<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        
        @media (max-width: 768px) {
            .container {
                max-width: 100%;
                margin: 10px;
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Doctor Login</h2>
      <form action="login_Condition.php" method="POST" onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required />
        <br />
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required />
        <br />
        <input type="submit" value="Login" />
      </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() === "") {
                alert("Please enter a username.");
                return false; 
            }

            if (password.trim() === "") {
                alert("Please enter a password.");
                return false; 
            }

            
            return true;
        }
    </script>
  </body>
</html>
