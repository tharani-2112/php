<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM register WHERE id=$id";
    $result=mysqli_query($mysqli,$sql);
    if($result)
    {
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($mysqli));
    }
}
?>