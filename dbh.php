<?php

$conn;

function init() {

	global $conn;

	$conn = mysqli_connect("localhost", "root", "", "logintest");

	if(mysqli_connect_errno()) {
		die("Connection failded: " . mysqli_connect_error() );
	} else {
		/* merhai debuging :- not save to the db 
		echo "YOu have successfully connected to the database";
		$result = mysqli_query($conn, "SELECT * FROM user");
		echo "<pre>"; print_r($result); echo "</pre>";
		*/
	}
}

function check_username_and_password($username, $password) {

	global $conn;

	if(!$username || !$password) return false;

	$query = "SELECT `uid`, `pwd` FROM `user` WHERE uid='$username' AND pwd='$password'";

	$result = mysqli_query($conn, $query);

	if(!$result) {
		die("Unable to connect to the database");
	}

	print_r($result);

	$result_array = mysqli_fetch($conn, )

	$password_from_database = $result['pwd']; // fetch from mysql using the username
	if($password_from_database === $password) {
		$_SESSION['username'] = $username;
		return true;
	} else {
		return false;
	}
}

init();

?>


