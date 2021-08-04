<?php
echo "Establishing connection</br>";
$con = mysqli_connect("localhost","root","","student");
echo "<hr>";
echo ("<br/>");

//---------------------------------------
echo "Check for Connectivity errors<br/>";
if($con->connect_errno){
    echo "Failed to connect to the database". $con->connect_errno;
}
else{
    echo "Connection Successful";
}
echo "<hr>";
echo "<br/>";

 //create procedure
$sql= "DELIMITER //

CREATE PROCEDURE GetSalaryinfo()
BEGIN
	SELECT *  FROM details WHERE salary>20000;
END //

DELIMITER ; "; 
$result =mysqli_query($con,$sql); 

$sql= "EXEC GetSalaryinfo()";
$result = mysqli_query($con,$sql);

//create function
$sql="DELIMITER $$ 
CREATE FUNCTION EmployeeSalary(  
    salary int  
)   
RETURNS VARCHAR(20)  
DETERMINISTIC  
BEGIN  
    DECLARE EmployeeSalary VARCHAR(20);  
    IF salary > 20000 THEN  
        SET EmployeeSalary = 'High';  
    ELSEIF (salary <= 20000 AND   
            salary >= 10000) THEN  
        SET EmployeeSalary = 'Average';  
    ELSEIF salary < 10000 THEN  
        SET EmployeeSalary = 'Low';  
    END IF;   
    RETURN (EmployeeSalary);  
END$$ 
DELIMITER ;  ";

$result =mysqli_query($con,$sql); 

$sql= "EXEC SELECT 
FirstName, EmployeeSalary(25000)
FROM
details
ORDER BY 
FirstName;";
$result = mysqli_query($con,$sql);