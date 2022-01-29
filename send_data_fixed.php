<?php
$host = "localhost";
$user = "root";
$pass = "bEdEmAn74";
$db = "stopak";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo"There are some problems conecting the database";
}
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
// $password = $_POST['password'];


// colletcting form data in variables

//then we must insert them in the table
$qry = "INSERT INTO `users` (`username`, `email`, `phone`, `password`) VALUES ('$username', '$email', $phone, '$password')";
// phone neni v uvozovkach protoze je to integer
$insert = mysqli_query($con, $qry);
if(!$insert){
	echo "There are some problems while conecting to database ";
}else{
echo "Data Inserted";
}
?>
