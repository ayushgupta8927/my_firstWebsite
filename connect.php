<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['NAME'])) {
    $NAME = $_POST['NAME'];
}

if (isset($_POST['PHONE'])) {
    $PHONE = $_POST['PHONE'];
}

if (isset($_POST['EMAIL'])) {
    $EMAIL = $_POST['EMAIL'];
}
if (isset($_POST['MESSAGE'])) {
    $MESSAGE = $_POST['MESSAGE'];
}

/*
	$NAME = $_POST['NAME'];
	$PHONE = $_POST['PHONE'];
	$EMAIL = $_POST['EMAIL'];
	$MESSAGE = $_POST['MESSAGE'];*/

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO dbconnect(NAME,PHONE NO.,Email id,Your Message) VALUES(?,?,?,?)");
	$stmt->bind_param('ssiss',$id,$NAME, $PHONE, $EMAIL, $MESSAGE);
	$stmt->execute();
	echo "Registration Sucessfully.....";
	$stmt->close();
	$conn->close();
}


?>