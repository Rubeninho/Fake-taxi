<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo"There are some problems conecting the database";
}
$name  = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


// colletcting form data in variables

//then we must insert them in the table
$qry = "INSERT INTO `table`(`name`, `email`, `phone`) VALUES ('$name' , '$email' ,$phone )";
// phone neni v uvozovkach protoze je to integer 
$insert = mysqli_query($con, $qry);
if(!$insert){
	echo "There are some problems while conecting to database ";
}else{
echo "Data Inserted";	
}
?>