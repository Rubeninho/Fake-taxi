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
 $connect = mysqli_connect('localhost', 'root', 'bEdEmAn74', 'stopak');
 $query = 'SLECET id, username, email, phone, password FROM users';
$result = mysqli_query($connect, $query);

echo mysqli_num_rows( $result);
while($record = mysql_fetch_assoc($result)){
    echo'<pre>';
    print_r($record);
    echo'</pre>';
    echo'<h2>'.$record['name'].'</h2>';

}

?>
    
</body>
</html>