<?php 
include 'connect.php';
if(isset($_POST['submit']))
{   
  $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $file=$_POST['file'];


  $file = rand(1000,100000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $folder="upload/";
  move_uploaded_file($file_loc,$folder.$file);
    if(!empty($name)&&!empty($email)&&!empty($mobile)&&!empty($password)&&!empty($gender)&&!empty($country)&&!empty($file))
    {
    $sql="INSERT INTO register (name,email,mobile,password,gender,country,file) VALUES ('$name','$email','$mobile',md5('$password'),'$gender','$country','$file')";
    
    $result=mysqli_query($mysqli,$sql);
    if($result)
     header("location:display.php");
     die;
    }
    else
    {
      die(mysqli_error($mysqli));
    }

}
?>
<!DOCTYPE html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/crud/css/register.css">
</head>
<body>
    <div id="container">
    <img id="image" src="http://localhost/crud/css/usericon.jpg" height="70" width='70'/>
    <form class="form" method="post" enctype="multipart/form-data" name="form">
      <h5 class="heading">REGISTER HERE</h5>
        <input class="inputs" name="name" id="FirstName"  required type="text" max="20" placeholder="Full Name"/><br><br>
        <input class="inputs"  name="email" id="Email" required type="email" placeholder="Email address"/><br><br>
        <input class="inputs" name="mobile" id="ps1" required type="number" placeholder="Mobile number"/><br><br>
        <input class="inputs" name="password" id="ps2" required type="password" placeholder="Password"/><br><br>
        <div class="inputs">
        <label style="color:grey;">Gender:</label>
            <input value="Male" name="gender" id="m_Gender" required type="radio"<?php if (isset($gender) && $gender=="Male") echo "checked";?> />
              <label style="color:grey;">Male</label>
            <input value="Female" name="gender" id="f_Gender" type="radio"<?php if(isset($gender) && $gender=="Female")echo "checked";?> />
              <label style="color:grey;">Female</label>
        </div><br>
        <select class="inputs" style="color:grey;" name="country" required>
         <option style="background-color:black;">Choose Country</option>
         <option style="background-color:black;">India</option>
         <option style="background-color:black;">US</option>
         <option style="background-color:black;">UK</option>
         <option style="background-color:black;">Canada</option>
        </select> <br><br>
        
        <input name="file" class="inputs"  style="color:grey;" required type="file" /><br>

        <button id="button" type="submit" name="submit">Signup</button><br>
        <a href="login.php" style="color:white;">Already have an account</a>
    </form>
    </div>
</body>
</html>
