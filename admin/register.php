<?php
// Database connection
include "connection.php";


// Check registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash and salt the password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password_hash) VALUES ('$username', '$password_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
