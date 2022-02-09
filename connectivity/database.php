<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $data = 'round50';

// // new mysqli($host,$user,$pass,$data)

// $db = @new mysqli($host,$user,$pass,$data);//dont show mysql error



//echo $db->connect_errno;  //chack error
//echo $db->connect_error;  // chack error
?>
<?php
define('host','localhost');
define('user','root');
define('pass','');
define('data','round50');
$db = @new mysqli(host,user,pass,data);
if ($db->connect_errno>0){
    $db->connect_error;
}
//$sb->close();

