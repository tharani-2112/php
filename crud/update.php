<?php 
  include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from register where id =$id";
    $result=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password = $row['password'];
    $gender = $row['gender'];
    $country = $row['country'];
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $password=$_POST['password'];
      $gender = $_POST['gender'];
      $country = $_POST['country'];
      $sql="update register set id='$id',name='$name',email='$email',mobile='$mobile', gender='$gender', country='$country' where id='$id'";
      $result=mysqli_query($mysqli,$sql);
      if($result)
      {
        header('location:display.php');
      }else
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
        <input class="inputs" name="name" id="FirstName"   type="text" max="20" placeholder="Full Name" value="<?php echo $name ;?>"/><br><br>
        <input class="inputs"  name="email" id="Email" type="email" placeholder="Email address" value="<?php echo $email ;?>"/><br><br>
        <input class="inputs" name="mobile" id="ps1"  type="number" placeholder="Mobile number" value="<?php echo $mobile ;?>"/><br><br>
        <div class="inputs">
        <label style="color:grey;">Gender:</label>
            <input value="Male" name="gender" id="m_Gender" type="radio"<?php if (isset($gender) && $gender=="Male") echo "checked";?> />
              <label style="color:grey;">Male</label>
            <input value="Female" name="gender" id="f_Gender" type="radio"<?php if(isset($gender) && $gender=="Female")echo "checked";?> />
              <label style="color:grey;">Female</label>
        </div><br>
        <select class="inputs" style="color:grey;" name="country" required value="<?php echo $country ;?>">
         <option style="background-color:black;">Choose Country</option>
         <option style="background-color:black;">India</option>
         <option style="background-color:black;">US</option>
         <option style="background-color:black;">UK</option>
         <option style="background-color:black;">Canada</option>
        </select> <br><br>
        
        <input name="file" class="inputs"  style="color:grey;" type="file" value="<?php echo $file;?>" /><br>

        <button id="button" type="submit" name="submit">Save</button><br>
        
    </form>
    </div>
</body>
</html>
