<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="neeyat";
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"<h2>Thankyou For Registering:) <br>These are other heroes who have registered-<br></h2>";
}
$sql = "SELECT name, local, email FROM mentor";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"]."<br>". " Area: " . $row["local"]."<br>". " email id: " . $row["email"]."<br>"."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>