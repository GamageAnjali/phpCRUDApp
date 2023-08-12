
<?php
include('dbconfig.php')
?>

<?php
include('includes\header.php')
?>  

<!--create form -->
<div class="container">
  <br><br>
<div class="card">
  <div class="card-body">

  <form action="code.php" method="POST">

  <label for="" class="form-label">Student ID</label>
    <input type="text" name="s_id" placeholder="Enter Student ID"  class="form-control">
    <label for="" class="form-label">First Name</label>
    <input type="text"  name="first_name" placeholder="Enter First Name" class="form-control"  >
    <label for="" class="form-label">Last Name</label>
    <input type="text"  name="last_name" placeholder ="Enter Last Name" class="form-control" >
 
  <button type="submit" name="saveBtn" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
<!-- ............create table.......... -->
<div class="container">
  <br><br>
<div class="card" >
  <div class="card-body">


  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">S_ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>

<?php
$ref="Student";
  $getdata = $database->getReference($ref)->getValue();
            
          
               if($getdata > 0)
                {
                  $i=1;
                    foreach($getdata as $key => $row)
                       {
                      
             ?>          
            
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row['s_id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    
                    <td>
                       <a href="edit.php?id=<?php echo  $key ?>" class="btn btn-primary btn-sm">Edit</a>
                                                         
                   </td>

                   <td>
                    <form action="code.php" method="POST">
                      <input type="hidden" name="id_key" value="<?php echo  $key ?>">

                    <button type="submit" name="deleteBtn"class="btn btn-danger">Delete</button>


                    </form>
                   </td>
                    <?php
                       }
                      }else{
                        ?>
                        <tr>
                          <td colspan="5">no record found</td>
                        </tr>
                        <?php
                      }
                    ?>
               
               
    </tr>
    
  </tbody>
</table>






    </div>
</div>
</div>

<?php
include('includes\footer.php')
?>