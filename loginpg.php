<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "register";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

       // SQL query to check if the username and password match
    $sql = "SELECT * FROM form WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        // Redirect or perform any other action after successful login
    } else {
        // Login failed
        echo "Invalid username or password.";
    }

    $conn->close();
}
?><!DOCTYPE html>
<html>
 
<head>
    <title>Login</title>
    <link rel="stylesheet"
          href="login.css">
</head>
 
<body>
    <div class="main">
        <h1>Enter your login credentials</h1>
        <form action="#" method="POST">
            <label for="first">
                  Email:
              </label>
            <input type="text"
                   id="email"
                   name="email"
                   placeholder="Enter your Email" required>
 
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Enter your Password" required>
 
            <div class="wrap">
                <button type="submit"
                        onclick="solve()">
                    Submit
                </button>
            </div>
        </form>
        <p>Not registered? 
              <a href="reg.php"
               style="text-decoration: none;">
                Create an account
            </a>
        </p>
    </div>
</body>
 
</html>