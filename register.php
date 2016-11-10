<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>user registration form validation using javascript with example</title>
</head>
<body>
<div id="emptyDiv">

<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">User Registration Form </h2>
      <p class="head_para">Fill all the texts to register</p>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form name="form" action="insert.php" method="post">
       <div id="errorBox"></div>
        <input type="text" name="Name" value="" placeholder="First Name"  class="input_name" >
        <input type="text" name="LastName" value="" placeholder="Last Name" class="input_name" >
        
      </div>
      <div id="email_form">
        <input type="text" name="Email" value="" placeholder="Your Email" class="input_email">
      </div>
      <div id="Re_email_form">
        <input type="text" name="enterEmail" value="" placeholder="Re-enter Email" class="input_Re_email">
      </div>
      <div id="password_form">
        <input type="password" name="Password" value="" placeholder="New Password" class="input_password">
      </div>
      
       <div>
        <input type="Submit" value="Register" onClick="insert.php">
		
      </div>
     </form>
    </div>
    <!--form ends--> 
  </div>
</div>
<!--container ends-->
</body>
</html>
