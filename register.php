<?php
require_once "db_connect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Prepared statement
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "<h3 style='color:green; text-align:center;'>Registration Successful!</h3>";
            echo "<p style='text-align:center;'><a href='register.html'>Go Back</a></p>";
        } else {
            echo "<h3 style='color:red; text-align:center;'>Error: Could not register user.</h3>";
        }

        $stmt->close();
    } else {
        echo "<h3 style='color:red; text-align:center;'>Error preparing statement.</h3>";
    }

    $conn->close();
}
?>
