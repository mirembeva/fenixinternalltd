<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "loansservice";

// Create connection
$conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n" . $conn->error);

echo "Connected successfully";
