<?php
	include '/includes/header.inc.php' ;
?>


<?php
	if(isset($_SESSION['username'])) {
		echo $_SESSION['id'];
		// u can do some thing using the id of sessions 
	} else {
		echo "you r not logged in! ";
	}

?>
<br><br><br>

<form action="includes/signup.inc.php" method="POST">
	
	<input type="text" name="first" placeholder="Firstname" ><br>

	<input type="text" name="last" placeholder="Lastname" ><br>

	<input type="text" name="uid" placeholder="Username" ><br>
	
	<input type="email" name="email" placeholder="email" ><br>
	
	<input type="password" name="pwd" placeholder="Password" ><br>
	<button type="submit">singup</button>
</form>

<br><br><br>

</body>
</html>