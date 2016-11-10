 <?php
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $lastName = isset($_POST['name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['name']) ? $_POST['email'] : '';
    $password = isset($_POST['name']) ? $_POST['password'] : '';
     
    

    $conn = mysql_connect('localhost', 'betty', '123', 'register'); 
     
    $query = "INSERT INTO registration ( name, last_name, email, password )
    VALUES ( '$name', '$lastName', '$email', '$password' );";
    
    $result = mysql_query($query);
     
    mysql_close();

    if($result) {
        header("Location:login.php");
     } else {
        die("Could not register ");
     }
?>
