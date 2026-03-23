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

// SQL query to select all students
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Display results in HTML table
echo "<h2>Student Listing</h2>";
echo "<table border='1'>
<tr>
<th>StudentNo</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>ContactNo</th>
<th>ProgramCode</th>
</tr>";

// Loop through results and display each student
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["StudentNo"]."</td>
        <td>".$row["Firstname"]."</td>
        <td>".$row["Lastname"]."</td>
        <td>".$row["Gender"]."</td>
        <td>".$row["ContactNo"]."</td>
        <td>".$row["ProgramCode"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No students found</td></tr>";
}
echo "</table>";

// Close connection
$conn->close();
?>