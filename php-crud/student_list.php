<?php include('database.php');?>
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
    $sql = "SELECT * FROM student";
    $data = $db->query($sql);?>
    <table class="table table-dark table-striped">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>gender</th>
            <th>Action</th>
        </tr>
        <?php 
        while($row=$data->fetch_object()){?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->phone ?></td>
            <td><?php echo $row->gender ?></td>
            <td>
                
                <a class="btn btn-info" href="edit.php?edid=<?php echo $row->id;?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?stid=<?php echo $row->id;?>">Delete</a>
                
            </td>
        </tr>

     <?php } ?>
    </table>
     <br><br>
     <a class="btn btn-primary" href="entryform.php">new entry</a>
     </div>
</body>
</html>