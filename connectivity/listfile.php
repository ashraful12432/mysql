<?php include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM student";
        $data = $db->query($sql);
        // echo "<pre>";
        // print_r($data);
        ?>
        <table>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>phone</th>
    
<?php
       while($row = $data->fetch_array()){?>
        <!-- fetch_assoc();/fetch_object(); onother way of fetch_array()-->
         <tr>
             <td><?php echo $row['id']?></td>
             <td><?php echo $row['firstname']?></td>
             <td><?php echo $row['lastname']?></td>
             <td><?php echo $row['email']?></td>
             <td><?php echo $row['phone']?></td>
         </tr>
     <?php  }     
    ?>
    </table>
</body>
</html>