<?php include('database.php');?>
<?php

$id= $_GET['edid'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
       // print_r($_POST);
      
       extract($_POST);

       $sql = "UPDATE student SET name='$name',email='$email',phone='$phone',gender='$gender' WHERE id='$upid'";
       $db->query($sql);
      // echo $db->affected_rows;
      

}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>student list</h1>
   
    <?php 
    $sql = "SELECT * FROM student where id='$id'";
    $data = $db->query($sql);
    $row= $data->fetch_object();


    $db->close();
    ?>

<form action="" method="post">
        name<br>
        <input type="text" value="<?php echo $row->name;?>" name="name"><br>
         email<br>
        <input type="text" value="<?php echo $row->email;?>" name="email"><br>
        phone<br>
        <input type="text" value="<?php echo $row->phone;?>" name="phone"><br>
        gender<br>
       male <input type="radio" name="gender"<?php if ($row->gender=='male') echo "checked"; ?> value="male">
       female <input type="radio" name="gender"<?php if ($row->gender=='female') echo "checked"; ?>  value="female"><br>
       <input type="hidden" name="upid" value="<?php echo $row->id;?>">
        <input type="submit" name="submit" value="update" >
    </form>
    <br><br>
    <a class="btn btn-primary" href="student_list.php">show all student</a>
</div>
</body>
</html>