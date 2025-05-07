<?php
$env = parse_ini_file('.env');

// Create connection
$conn = new mysqli($env["SERVERNAME"], $env["USERNAME"], $env["PASSWORD"]);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = "CREATE DATABASE IF NOT EXISTS {$env["DATABASE"]}";
$conn->query($query);

$query = "USE {$env["DATABASE"]}";
$conn->query($query);

$query = "CREATE TABLE IF NOT EXISTS comment (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, content VARCHAR(255))";
$conn->query($query);

$query = "INSERT INTO comment (content) VALUES ('Hello world :D !')";
$conn->query($query);

$conn->close();
