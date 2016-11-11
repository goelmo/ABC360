
<?php
	include '/includes/header.inc.php' ;
	include 'dbh.php';
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<input type="text" name="username" placeholder="Username" ><br>
	
	<input type="password" name="password" placeholder="password" ><br>
	<button types="submit">Login</button>
</form>

<?php
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	if(check_username_and_password($username, $password)) {
		echo "You have logged in";
	} else {
		echo "Username and password don't match";
	}
?>
<br><br><br>

<form action="includes/signup.inc.php" method="POST">
	
	<input type="text" name="first" placeholder="Firstname" ><br>

	<input type="text" name="last" placeholder="Lastname" ><br>

	<input type="text" name="username" placeholder="Username" ><br>
	
	<input type="email" name="email" placeholder="email" ><br>
	
	<input type="password" name="password" placeholder="Password" ><br>

	<button type="submit">singup</button>
</form>

<br><br><br>
<form action="includes/lockout.inc.php" method="POST">
	<button>Log Out </button>
</form>
</body>
</html>