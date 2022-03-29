<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    <tr>
        <th>ID</th>
        <th>name</th>
        <th>password</th>
        <th>email</th>
        <th>sign_up</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","bEdEmAn74","websitedb");
$sql = "SELECT * FROM users";
$result =$conn->query($sql);
if($result->num_rows >0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>" .$row["user_id"]. "</td><td>" .$row["name"]. "</td><td>" .$row["password"]. "</td><td>" .$row["email"]. "</td><td>" .$row["date"]. "</td></tr>";

    }
}else{
    echo "no Results";
   
}
//$conn-> close();

?>


</table>
</body>
</html>