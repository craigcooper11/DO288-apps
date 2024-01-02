<?php
echo "Hello, World! PHP version is!" . PHP_VERSION . "\n";
$servername = getenv("HOST");
$username = getenv("USER");
$password = getenv("PASS");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
    die();
}
echo("Connected successfully");
?>
