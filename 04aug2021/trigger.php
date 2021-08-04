<?php
$con=mysqli_connect("127.0.0.2","root","","student");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,'student');
print "<h2>MySQL: Simple Select statement</h2>";
$result = mysqli_query($con,"SELECT * from emp");
echo "<table border='1'>
<tr>
<th>EmpId</th>
<th>Firstname</th>
<th>Salary</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
}
echo "</table>";
print "<h2>CREATE MySQL Trigger In PHP</h2>";
$sql = "CREATE TRIGGER MysqlTrigger BEFORE UPDATE ON emp FOR EACH ROW SET NEW.name=UPPER(NEW.name);";
mysqli_query($con,$sql);
print "<h2>MySQL: Update Statement</h2>";
$qry = mysqli_query($con,"UPDATE emp SET name='ram' where id=2");
echo "Table has been updated.";
mysqli_query($con,$qry);
print "<h2>MySQL: Effect of Trigger</h2>";
$result = mysqli_query($con,"select * from emp");
echo "<table border='1'>
<tr>
<th>EmpId</th>
<th>Firstname</th>
<th>Salary</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>