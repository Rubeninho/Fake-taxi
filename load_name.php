<?php
$host = "localhost";
$user = "root";
$pass = "bEdEmAn74";
$db = "stopak";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td></tr>" $row["username"]. ;
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>