 <?php
session_start();
include '../dbh.php';

$first = isset($_POST['first']) ? $_POST['first'] : '';
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first, last, uid, pwd ) 
		VALUES (\"$first\", \"$last\", \"$uid\", \"$pwd\")";
/*
echo $sql;
var_dump($conn);
*/

$result = mysqli_query($conn, $sql);

if(!$result) {
	die('The service is temporarily unavailable');
}else{
	/* checking if the form is there ... 
	var_dump($result);
	echo 'You have susccessully signed up';
	*/
 	header("Location : login.php");
}
?>