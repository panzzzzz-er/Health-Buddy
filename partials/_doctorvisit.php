<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$docname = $_POST['docname'];
$whentotake = $_POST['whentovisit'];
$docname = $_POST['visittime'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO medicines (docname, whentovisit, visittime) VALUES ('$docname', '$whentovisit', '$visittime')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
	header("location: C:\xa\htdocs\demo\welcome.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
