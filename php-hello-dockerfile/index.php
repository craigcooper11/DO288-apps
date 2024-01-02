<?php
echo "Hello, World! PHP version is!" . PHP_VERSION . "\n";
$servername = $_ENV["HOST"];
$username = $_ENV["USER"];
$password = $_ENV["PASS"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
    die();
}
echo("Connected successfully");
?>
