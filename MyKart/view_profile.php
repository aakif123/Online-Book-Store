<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MyKart &bull; User Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            
        body {background: url('img/d5.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
#content {
        background-color: rgba(0,0,0,0.3);
        max-width: 715px;
        padding: 25px 20px;
        margin-top: 50px;
        margin-left: 325px;
        color: #f9f9f9;
    }
    a{
        color: #000000;
        text-decoration: none;
    }
    a:hover { 
    opacity: 0.8;
  }
  
input[type=text], input[type=tel], input[type=password], input[type=passwor], input[type=email] {
  padding: 8px 18px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #191919;
  box-sizing: border-box;
  background-color: #191919;
  color: #ffffff; font-style: italic; font-family: sans-serif; font-variant:small-caps;
}

.container {
  padding: 12px;
}

span.dashboard{
    float: left;
}
</style>
</head>
<body>
<?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $email_id =  $_SESSION['email_id'];
        
        //getting users data
        $u_query = "SELECT first_name, last_name, phone_no, email_id, pincode, password FROM users WHERE email_id = '$email_id'";
        $u_result = mysqli_query($conn, $u_query);
        $u_row = mysqli_fetch_array($u_result);

        ?>
    
    <div id="content">
        <h2><center>Your Details</center></h2>

<form>
 
    <div class="container">
        <label for="first_name" style="margin-left:10px"><b>First Name</b></label>
        <input style="margin-left:38px" type="text" value="<?php echo $u_row['first_name']; ?>" name="first_name" size="15" disabled>
        
         <label for="last_name" style="margin-left:30px; margin-right: 10px"><b>Last Name</b></label>
         <input style="margin-left:58px" type="text" value="<?php echo $u_row['last_name']; ?>" name="last_name" size="15" disabled><br>
     
      <label for="phone_no" style="margin-left:10px"><b>Phone Number</b></label>
      <input style="margin-left:10px" type="tel" value="<?php echo $u_row['phone_no']; ?>" name="phone_no" maxlength="10" size="15" disabled>
        
     <label for="pincode" style="margin-left:30px; margin-right: 10px"><b>Postal Address</b></label>
     <input style="margin-left:15px" type="tel" value="<?php echo $u_row['pincode']; ?>" name="pincode" maxlength="6" size="15" disabled><br>
     
      <label for="email_id" style="margin-left:10px"><b>Email Id</b></label>
      <input style="margin-left:64px" type="email" value="<?php echo $u_row['email_id']; ?>" name="email_id" size="32" disabled><br>

    <label for="password" style="margin-left:10px"><b>Password</b></label>
    <input style="margin-left:48px" type="password" value="<?php echo $u_row['password']; ?>" name="password" size="15" id="myInput" disabled>
    <input style="margin-left:15px; margin-right: 5px;" type="checkbox" onclick="myFunction()"><b>Show Password</b><br>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "passwor";
  } else {
    x.type = "password";
  }
}
</script>
    </div>
    <div class="container">
        <span class="dashboard">Back <a href="user_dashboard.php">Dashboard</a></span>
  </div>
</form>
    </div>
    </body>
</html>
