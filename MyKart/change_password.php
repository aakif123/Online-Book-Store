<!DOCTYPE html>
<html>
<head>
    <title>MyKart &bull; Change Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        
body {background-image: url('img/back.png');
    font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }

#content {
        background-color: rgba(0,0,0,0.7);
        max-width: 350px;
        padding: 30px 20px;
        margin-top: 50px;
        color: #f9f9f9;
    }
    a{
        color: #0073e4;
        text-decoration: none;
    }
    a:hover { 
    opacity: 0.8;
  }
  
input[type=password] {
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
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 12px;
}

.icon {
  color: #0073e4;
  min-width: 30px;
}

span.login{
    float: left;
}

</style>
</head>
<body>
    <?php
    
    //creating a session for successfull login
    session_start();
    
    //getting user email
    $_SESSION['email_id'] = $_SESSION['email_id'];
    ?>
    
    <center>
    <div id="content">
        <h2>Change Password</h2>

        <form action="val_change_password.php" method="post">
 
    <div class="container">
        <label for="password"><b>New password</b></label><br>
    <i class="fas fa-lock icon"></i>
    <input type="password" placeholder="Enter new password" name="password" size="35"
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
           title="Must contain at least one number and one uppercase and 
           lowercase letter, and at least 6 or more characters" required><br>
    
    <label for="password_repeat"><b>Confirm password</b></label><br>
    <i class="fas fa-lock icon"></i>
    <input type="password" placeholder="Re-enter new password" name="password_repeat" size="35" required><br>

    <button type="submit">Save changes</button>
  </div>

  <div class="container">
      <span class="login">Go <a href="forgot_password.php">Back</a></span>
  </div>
</form>
    </div>
        </center>
</body>
</html>
