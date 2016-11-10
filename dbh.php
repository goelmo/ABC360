
<?php

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
?>


