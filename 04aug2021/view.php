<?php
$con=mysqli_connect("localhost","root","","student");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db( $con,'student');
print "<h2>MySQL: Creating View</h2>";
$result = mysqli_query($con,"CREATE VIEW virtual_empdtl as select id, Firstname,Lastname,role from emp_dtl1");
print "<h2>MySQL: View Created.</h2>";
print "<h2>MySQL: Select Virtual( View) table data</h2>";
$result1 = mysqli_query($con,"SELECT * from virtual_empdtl");
echo "<table border='1'>
<tr>
<th>EmpId</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Role</th>
</tr>";
while($row = mysqli_fetch_array($result1))
  {
   echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Firstname'] . "</td>";
  echo "<td>" . $row['Lastname'] . "</td>";
  echo "<td>" . $row['role'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
  ?>
