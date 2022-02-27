<?php

session_start();
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'user');


$uname = $_GET['uname'];
$pass = $_GET['pass'];

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

/* Prevention */
// $uname = mysqli_real_escape_string($conn,$uname);
// $pass = mysqli_real_escape_string($conn,$pass);


$sql = "SELECT * FROM login_details WHERE username = '$uname' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);
echo $check . "<br>";

if($check >= 1){
	echo '<h1>Connection is successful</h1>';
	$_SESSION['user'] = $uname ;
	header('location:home.php') ;
}
else {
	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

?>
