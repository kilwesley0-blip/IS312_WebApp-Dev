<?php
// Author: Wesley Kil
// Date: 21nd March 2026
// Unit: IS312 Web Application Development

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data from POST request
$programCode = $_POST['programCode'];
$programName = $_POST['programName'];

// SQL query to insert new program record
$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$programCode', '$programName')";

// Execute query and display result
if ($conn->query($sql) === TRUE) {
    echo "New program added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>