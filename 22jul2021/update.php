<?php 
  include 'connect.php';
    $id=$_GET['updateid'];
    $sql="SELECT * FROM register WHERE id=$id";
    $result=mysqli_query($mysqli,$sql) or die("error to fetch employees data");    
?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>Registration Form</title>
    <script type="text/javascript" src="http://localhost/php/crud/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  </head>
  <body>
    
      <button><a href ="signup.php">Add user</a></button>
      <button><a href ="logout.php">Logout</a></button>
        <table class="table table-condensed table-hover table-striped bootgrid-table" width="60%" cellspacing="0" >
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>       
              <th scope="col">gender</th>
              <th scope="col">Country</th>
            
            </tr>
          </thead>
          <tbody id="_editable_table">
                <?php foreach($result as $res) :?>
                  <tr data-row-id="<?php echo $res['id'];?>">
                  <td col-index='0'> <?php echo $id; ?></td>
                  <td class="editable-col" contenteditable="true" col-index='1' oldVal ="<?php echo $res['name'];?>"><?php echo $res['name'];?></td>
                  <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $res['email'];?>"><?php echo $res['email'];?></td>
                  <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $res['mobile'];?>"><?php echo $res['mobile'];?></td> 
                  <td class="editable-col" contenteditable="true" col-index='4' oldVal ="<?php echo $res['gender'];?>"><?php echo $res['gender'];?></td>
                  <td class="editable-col" contenteditable="true" col-index='5' oldVal ="<?php echo $res['country'];?>"><?php echo $res['country'];?></td>
                </tr>';
                <?php endforeach;?>
               
          </tbody>
      </table>
    </div>  
    <script type="text/javascript">
$(document).ready(function(){
  $('td.editable-col').on('focusout', function() {
    data = {};
    data['val'] = $(this).text();
    data['id'] = $(this).parent('tr').attr('data-row-id');
    data['index'] = $(this).attr('col-index');
      if($(this).attr('oldVal') === data['val'])
    return false;
    
    $.ajax({   
          
          type: "POST",  
          url: "server.php",  
          cache:false,  
          data: data,
          dataType: "json",       
          success: function(response)  
          {   
            //$("#loading").hide();
            if(response.status) {
              $("#msg").removeClass('alert-danger');
              $("#msg").addClass('alert-success').html(response.msg);
            } else {
              $("#msg").removeClass('alert-success');
              $("#msg").addClass('alert-danger').html(response.msg);
            }
          }   
        });
  });
});
</script>  
</body>
</html>