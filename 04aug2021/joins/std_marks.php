<?php
//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//database is the database name
$dbname = "student";

// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);
// Check this connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//insert records into table
$sql = "INSERT INTO student_marks VALUES (1,98,99);";
$sql .= "INSERT INTO student_marks VALUES (2,78,89);";
$sql .= "INSERT INTO student_marks VALUES (3,78,98);";
$sql .= "INSERT INTO student_marks VALUES (4,89,98);";
$sql .= "INSERT INTO student_marks VALUES (7,89,79);";

if ($conn->multi_query($sql) === TRUE) {
echo "data stored successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
