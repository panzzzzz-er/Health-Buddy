<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$medname = $_POST['medname'];
$whentotake = $_POST['whentotake'];
$docname = $_POST['docname'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO medicines (medname, whentotake, docname) VALUES ('$medname', '$whentotake', '$docname')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
	header("location: demo/welcome.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
