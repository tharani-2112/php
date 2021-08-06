<?php
include 'connect.php';
session_start();

if(isset($_POST['submit']))
{
    extract($_POST);
    $sql=mysqli_query($mysqli,"SELECT * FROM register WHERE Email='$email' and Password=md5('$password')");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
		$_SESSION["name"]=$row['name'];
        $_SESSION["email"]=$row['email']; 
        $_SESSION["mobile"]=$row['mobile']; 
		$_SESSION["password"]=$row['$password'];
        $_SESSION["gender"]=$row['gender'];
        $_SESSION["country"]=$row['country'];
        $_SESSION["file"]=$row['file'];
        header("Location: profile.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Login Page</title>

    <link rel="stylesheet" type="text/css" href="http://localhost/crud/css/register.css">
</head>
<body>
    <div id="container">
    <img id="image" src="http://localhost/crud/css/usericon.jpg" height="70" width='70'/>
    <link rel="stylesheet" type="text/css" href="http://localhost/php/crud/css/register.css">
</head>
<body>
    <div id="container">
    <img id="image" src="http://localhost/php/crud/css/usericon.jpg" height="70" width='70'/>

    <form class="form" method="post">
      <h5 class="heading">LOGIN HERE</h5>
        <input class="inputs"  name="email" id="Email" type="email" placeholder="Email address"/><br><br>
        <input class="inputs" name="password" id="ps2" type="password" placeholder="Password"/><br><br>
        <button id="button" type="submit" name="submit">Login</button><br><br>
        <a href="index.php" style="color:white;">Don't have an account</a>

        <a href="signup.php" style="color:white;">Don't have an account</a>

    </form>
    </div>
</body>
</html>
