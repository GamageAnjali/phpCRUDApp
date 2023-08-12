<?php
include('dbconfig.php');

if(isset($_POST['saveBtn']))
 {
   $s_id=$_POST['s_id'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];


   $postData = [
    's_id'=>$s_id,
    'fname'=>$first_name,
    'lname'=>$last_name,
   ];

   header("Location:index.php");
   $ref = "Student";
$postRef = $database->getReference($ref)->push($postData);

}
  //................update..............
  if(isset($_POST['updateBtn']))
 {
  $id = $_POST['id'];

   $s_id=$_POST['s_id'];
   $first_name=$_POST['fname'];
   $last_name=$_POST['lname'];


   $updateData = [
    's_id'=>$s_id,
    'fname'=>$first_name,
    'lname'=>$last_name,
   ];

 
   $ref = "Student/".$id;
   header("Location:index.php");
   $postData=$database->getReference($ref)->update($updateData);

 }

 //............delete............
 if(isset($_POST['deleteBtn']))
 {
                 
     $id = $_POST['id_key'];
     header("Location:index.php");
     $ref = "Student/".$id;
     $delete_data = $database->getReference($ref)->remove();
 }
?>