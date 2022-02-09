<?php
include('database.php');
  $id= $_GET['stid'];
   $sql= "DELETE FROM student WHERE id='$id'";
   $db->query($sql);
  if ($db->affected_rows>0){
      header('location:student_list.php');
  }
?>