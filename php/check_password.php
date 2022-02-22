<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // melo by se to spustit po stisknuti tlacitka submit 
    // a colectnout data
   
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    if (empty($password)||empty($password2)) {
      echo "Fill the line with your password please";

  }else if($password == $password2){
      echo"Both passwords are the same correct"

  }else{

    echo"Please the passwords are not same check them again."
      
  }




?>
