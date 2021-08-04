<html>
<body>
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
echo "inner join on student_address: ";
echo "<br>";
echo "<br>";
//sql query to display all student_address table based on student id using inner join
$sql = "SELECT * from student_address INNER JOIN student_marks on student_address.sid=student_marks.sid";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
	echo " STUDENT-ID : ". $row['sid'], " ----- NAME : ". $row['sname'] ," ----- ADDRESS : ". $row['saddress'] ;
	echo "<br>";
	
}

echo "<br>";
echo "inner join on student_marks: ";
echo "<br>";
echo "<br>";
//sql query to display all student_marks table based on student id using inner join
$sql1 = "SELECT * from student_marks INNER JOIN student_address on student_address.sid=student_marks.sid";
$result1 = $conn->query($sql1);
//display data on web page
while($row = mysqli_fetch_array($result1)){
	echo " STUDENT-ID : ". $row['sid'], " ----- SUBJECT 1 : ". $row['subject1'] ," ----- SUBJECT 2 : ". $row['subject2'] ;
	echo "<br>";
	
}


//close the connection

$conn->close();
?>
</body>
</html>
