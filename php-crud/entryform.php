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
    <h1>student entry form</h1>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       // print_r($_POST);
       include('database.php');
       extract($_POST);

       $sql = "INSERT INTO student VALUES(NULL,'$name','$email','$phone','$gender')";
       $db->query($sql);
      // echo $db->affected_rows;
       $db->close();

}
    ?>
    <form action="" method="post">
        name<br>
        <input type="text" name="name"><br>
         email<br>
        <input type="text" name="email"><br>
        phone<br>
        <input type="text" name="phone"><br>
        gender<br>
       male <input type="radio" name="gender" value="male">
       female <input type="radio" name="gender" value="female"><br>
        <input type="submit" name="submit" value="SAVE" >
    </form>
    <br><br>
    <a class="btn btn-primary" href="student_list.php">show all students</a>
</div>
</body>
</html>