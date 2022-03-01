<?php
$host = "localhost";
$user = "root";
$pass = "bEdEmAn74";
$db = "stopak";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo"There are some problems conecting the database";
}
$name  = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password_repeated = $_POST['password_repeated'];

if ($_SERVER["REQUEST_METHOD"] == "post") {
    // melo by se to spustit po stisknuti tlacitka submit
    // a colectnout data

		
  
		// colletcting form data in variables

		//then we must insert them in the table
		$qry = "INSERT INTO `users` (`username`, `email`, `phone`, `password`) VALUES ('$username', '$email', $phone, '$password')";
		// phone neni v uvozovkach protoze je to integer
		$insert = mysqli_query($con, $qry);
		if(	echo "There are some problems while conecting to database ";
		}else{!$insert){
		
		echo "Data Inserted";
		}
  
}
?>
