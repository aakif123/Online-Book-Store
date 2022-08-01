<!DOCTYPE html>
<html>
<head>
    <title>Signup &bull; MyKart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {background-image: url('img/back.png');
    font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }

#content {
        background-color: rgba(0,0,0,0.7);
        max-width: 725px;
        padding: 25px 20px;
        margin-top: 50px;
        margin-left: 425px;
        color: #f9f9f9;
    }
    a{
        color: #0073e4;
        text-decoration: none;
    }
    a:hover { 
    opacity: 0.8;
  }
  
input[type=text], input[type=tel], input[type=password], input[type=email] {
  padding: 8px 18px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: #ffffff;
  color: #191919; font-style: italic; font-family: sans-serif;
}

button {
  background-color: #0073e4;
  color: #f9f9f9; font-style: italic; font-family: sans-serif; font-variant: small-caps;
  padding: 12px 18px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 12px;
}

span.home{
    float: left;
}
span.login{
    float: right;
}
    </style>
</head>
<body>

    <div id="content">
        <h2><center>Sign up To MyKart</center></h2>

<form action="val_signup.php" method="post">
 
    <div class="container">
        <label for="first_name" style="margin-left:10px"><b>First Name</b></label>
         <input style="margin-left:38px" type="text" placeholder="Enter First name" name="first_name" size="15" required>
        
         <label for="last_name" style="margin-left:30px; margin-right: 10px"><b>Last Name</b></label>
     <input style="margin-left:68px" type="text" placeholder="Enter Last name" name="last_name" size="15" required><br>
     
      <label for="phone_no" style="margin-left:10px"><b>Phone Number</b></label>
      <input style="margin-left:10px" type="tel" placeholder="Enter Phone no" name="phone_no" maxlength="10" size="15" pattern="[0-9]{10}" 
             title="Must contain 10 digit mobile number only." required>
        
     <label for="pincode" style="margin-left:30px; margin-right: 10px"><b>Postal Address</b></label>
     <input style="margin-left:25px" type="tel" placeholder="Enter Pincode" name="pincode" maxlength="6" size="15" pattern="[0-9]{6}" 
             title="Must contain 6 digit pin code only." required><br>
     
      <label for="email_id" style="margin-left:10px"><b>Email Id</b></label>
      <input style="margin-left:64px" type="email" placeholder="Enter Email" name="email_id" size="32"
           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required><br>

    <label for="password" style="margin-left:10px"><b>Password</b></label>
    <input style="margin-left:48px" type="password" placeholder="Enter Password" name="password" size="15"
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  title="Must contain at least one number and one uppercase
and lowercase letter, and at least 6 or more characters." required>
    
    <label for="password_repeat" style="margin-left:30px; margin-right: 10px"><b>Repeat Password</b></label>
    <input style="margin-left:11px" type="password" placeholder="Confirm Password" name="password_repeat" size="15" required><br><br>
      
    <label><center>
        <input type="checkbox" name="t&c" style="margin-bottom:8px" required>
        By signing up, you agree to our <a>Terms and Conditions.</a><br> </center>
      </label>
    
    <center><button type="submit">Sign Up</button></center>
  </div>

  <div class="container">
      <span class="login">Already registered? <a href="login.php">Login</a></span>
      <span class="home">Back <a href="home.php">Home</a></span>
  </div>
</form>
    </div>
       
</body>
</html>