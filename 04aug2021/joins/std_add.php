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
$sql = "INSERT INTO student_address VALUES (1,'sravan kumar','kakumanu');";
$sql .= "INSERT INTO student_address VALUES (2,'bobby','kakumanu');";
$sql .= "INSERT INTO student_address VALUES (3,'ojaswi','hyderabad');";
$sql .= "INSERT INTO student_address VALUES (4,'rohith','hyderabad');";
$sql .= "INSERT INTO student_address VALUES (5,'gnanesh','hyderabad');";

if ($conn->multi_query($sql) === TRUE) {
echo "data stored successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
