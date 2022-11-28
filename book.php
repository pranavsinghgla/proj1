<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$room = $_POST['room'];
$seater = $_POST['seater'];
$choice = $_POST['choice'];


// database insert SQL code
$sql = "INSERT INTO `book` (`Sname`, `Semail`, `Smobile`, `Scheck_in`, `Scheck_out`,`Sroom`,`Sseater`,`choice`) VALUES ('$name', '$email', '$mobile', '$check_in', '$check_out','$room','$seater','$choice')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "refreshing......... ";
	
	
		header("refresh:1,url=payment.html");
}
else{
	echo"booking not done";
}


?>