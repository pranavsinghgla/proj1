<?php

$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$card = $_POST['type'];
$emonth = $_POST['month'];
$eyear = $_POST['year'];
$card_no = $_POST['card_no'];
$card_name = $_POST['card_name'];
$card_ccv = $_POST['card_ccv'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `pay` (`type`, `month`, `year`, `card_no`, `card_name`,`ccv`,`password`) VALUES ('$card', '$emonth', '$eyear', '$card_no', '$card_name','$card_ccv','$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "booked successfully";
	header("refresh:1,url=success.html");
	
}
else{
	echo"booking not done";
}


?>