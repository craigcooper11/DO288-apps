<?php
print "Hello, World! PHP version is " . PHP_VERSION . "\n";
$servername = $_ENV["HOST"];
$username = $_ENV["USER"];
$password = $_ENV["PASS"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    print_r("Connection failed: " . $conn->connect_error);
    die();
}
print_r("Connected successfully");
?>
