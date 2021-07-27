<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$gender=$_POST['Gender'];
$password=$_POST['Password'];
$cpassword=$_POST['confirmPassword'];
$country=$_POST['Country'];
$language=$_POST['language'];
$address=$_POST['Address'];
$file=$_POST['File'];

if(!empty($name) || !empty($email) || !empty($gender) || !empty($password) || !empty($cpassword) || !empty($country) 
|| !empty($language) || !empty($address) || !empty($file))
{    
    $conn = new mysqli('localhost','root','','registration_form');
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
    }
    mysqli_query($conn,$select);
      else {
        $SELECT = "SELECT * From form ";
        $INSERT = "INSERT INTO form (Name,Email,Gender,Password,confirmPassword,Country,language, Address,File)
        VALUES($name,$email,$gender,$password,$cpassword,$country,$language,$address,$file)";
        echo "New record inserted sucessfully";
     }
}
else{  
       echo "All field are required";
       die();
}
?>