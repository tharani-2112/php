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
              <th scope="col">Sl.no</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>        
              <th scope="col">Gender</th>
              <th scope="col">Country</th>
              <th scope="col">File</th>
              <th scope="col">Process</th>
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
                    <td>'.$row['file'].'</td>
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