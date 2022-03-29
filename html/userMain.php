<!DOCTYPE html id=main>
<html lang="en">

<head>
	<style>
	</style>
	<title>Fake Taxi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<body onload="initialize()">
	</head>
	<div
		style="background-attachment: fixed; background-repeat: no-repeat; background-position: center; background-image: url('https://besu.info/wp-content/uploads/2018/04/road-3341140_1920.jpg');">
		<div class="nav" id="navID">
			<input type="checkbox" id="nav-check">
			<div class="nav-header">
				<div class="nav-title">
					Fake-Taxi
				</div>
			</div>
			<div class="nav-btn">
				<label for="nav-check">
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>

			<div class="nav-links">
				<ul>
					<li><a href="driverMain.html">Driver</a></li>
					<li><a href="userMain.html">Traveller</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="login.html">Logout</a></li>
				</ul>
			</div>
		</div>

		<div>
			<div class="p-5">
				<h2 class="text-uppercase text-center" style="color: black;">Ride history:</h2>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-8" id="usermainDiv">
												<?php
$conn = mysqli_connect("localhost","root","bEdEmAn74","stopak");
$sql = "SELECT username, email FROM users";
$result =$conn->query($sql);
if($result->num_rows >0){
    while($row = $result-> fetch_assoc()){
        echo  "<td><td>" .$row["username"]. "</td> <td>"  .$row["email"]. "</td></td>";

    }
}else{
    echo "no Results";
   
}
//$conn-> close();

?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="d-flex col-xs-3 col-sm-6 col-md-8 col-lg-10">
					<a href="newRide1.html">
						<button type="button" class="btn btn-primary btn-circle" id="btndisclaimer">
							<span class="glyphicon">&#x2b;</span>
						</button>
					</a>

				</div>
			</div>
		</div>
	</div>
	<script src="script.js"></script>
</body>


</html>
