 <?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $host = "localhost";
  $user = "root";
  $pass = "bEdEmAn74";
  $db = "stopak";
  $con = new mysqli($host,$user,$pass,$db);
  if(!$con){
    echo"There are some problems conecting the database";
  }
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
  $username  = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $pwdRepeat = $_POST["pwdrepeat"];
  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php


  require_once 'functions.php';

  // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($username, $email, $phone, $password, $pwdRepeat) !== false) {
    header("location: ../register-form.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($uid) !== false) {
    header("location: ../register.html?error=invaliduid");
		exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ../register.html?error=invalidemail");
		exit();
  }
  // Do the two passwords match?
  if (pwdMatch($password, $pwdRepeat) !== false) {
    header("location: ../register.html?error=passwordsdontmatch");
		exit();
  }
  // Is the username taken already
  if (uidExists($conn, $phone) !== false) {
    header("location: ../register.html?error=usernametaken");
		exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  createUser($conn, $username, $email, $phone, $password);

} else {
	header("location: ../register.html");
    exit();
}

