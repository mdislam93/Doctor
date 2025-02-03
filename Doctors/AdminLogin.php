<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 400px;
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
          margin: 0;
          padding: 10px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Admin Login</h2>
      <form action="login.php" method="POST" onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" />
        <br />
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"/>
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
        if (username.trim() === "" || password.trim() === "") {
          alert("Both username and password are required.");
          return false; 
        }
        return true;
      }
    </script>
  </body>
</html>
