<?php
$host = "localhost";
$user = "root";
$pass = "bEdEmAn74";
$db = "stopak";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo"There are some problems conecting the database";
}

$email = $_POST['email'];

$sql = "SLECET * FROM users WHERE email = 'id';";
$emailResult = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($emailResult);
if($resultCheck > 0){
    while($row = mysql_fetch_assoc($emailResult)){
        echo $row['users_name'] ;
    }
}
?>
