

<?php
include('includes\header.php')
?>  

<?php
 include("dbconfig.php");
?>

<?php
include("code.php");
?>
<!--create edit form -->
<div class="container">
  <br><br>
<div class="card">
  <div class="card-body">


  <?php
        
       
        
        $ref = "Student/";
        $id = $_GET['id'];
        $editdata = $database->getReference($ref)->getChild($id)->getValue();
        
        ?>
        <body>
          <div>
          <form action="code.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                
                    <input type="text" name="s_id" class="form-control" value="<?php echo $editdata['s_id']; ?>"><br>
                    <input type="text" name="fname" class="form-control" value="<?php echo $editdata['fname']; ?>"><br>
                    <input type="text" name="lname" class="form-control" value="<?php echo $editdata['lname']; ?>"><br>
          
                    <form action="code.php" method="POST"> 
                
                      <button type="submit" name="updateBtn" >Update</button>
           
                   
                    </from>

</div>
</div>
</div>

<?php
include('includes\footer.php')
?>