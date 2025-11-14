<?php
$host = "localhost";
$dbname = "experiment2";   // or whatever your DB name is
$db_user = "root";
$db_password = "password123";   // or empty "" if you want

$conn = new mysqli($host, $db_user, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
