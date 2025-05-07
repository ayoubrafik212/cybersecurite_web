<?php
$env = parse_ini_file('.env');

// Create connection
$conn = new mysqli($env["SERVERNAME"], $env["USERNAME"], $env["PASSWORD"]);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = "DROP DATABASE {$env["DATABASE"]}";
$conn->query($query);

$conn->close();
