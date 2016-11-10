 <?php
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $lastName = isset($_POST['name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['name']) ? $_POST['email'] : '';
    $password = isset($_POST['name']) ? $_POST['password'] : '';
     
    

    $conn = mysqli_connect('localhost', 'betty', '123', 'register'); 
     
    $query = "INSERT INTO register ( name, last_name, email, password )
                VALUES ( \"$name\", \"$lastName\", \"$email\", \"$password\" )";
    
    $result = mysqli_query($conn,$query);
//    var_dump($result);

   header("Location:login.php");
/*
    if($result) {
        header("Location:login.php");
     } else {
        die("Could not register ");
     }
*/
?>
