<?php include'connect.php' ;?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <button><a href ="signup.php">Add user</a></button>
        <table class="table">
          <thead>
            <tr>
              <th>Sl.no</th>
              <th>Name</th>
              <th >Email</th>
              <th>Mobile</th>        
              <th>Gender</th>
              <th>Country</th>
              <th>File</th>
              <th>Process</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql="SELECT * FROM register";
          $result=mysqli_query($mysqli,$sql);
        
          if($result)
          {
            $row = mysqli_fetch_assoc($result);
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            { 
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];   
                $gender=$row['gender']; 
                $country=$row['country'];
                $file=$row['file'];           
                echo '
                <tr>
                  <th scope="row">'.$i.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>                   
                    <td>'.$gender.'</td>
                    <td>'.$country.'</td>
                    <td>'.$file.'</td>
                    <td><button><a href="update.php?updateid='.$id.'">Update</a></button>
                    <button><a href="delete.php?deleteid='.$id.'">Delete</a></button></td>
                </tr>';
                $i++;
                }        
            }
          ?>        
          </tbody>
      </table>
    </div>    
  </body>
</html>