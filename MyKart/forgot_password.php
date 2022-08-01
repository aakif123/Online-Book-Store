<!DOCTYPE html>
<html>
<head>
    <title>MyKart &bull; Forgot Password</title>
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
  
input[type=text], input[type=email] {
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
    <center>
    <div id="content">
        <h2>Find your account</h2>

        <form action="val_forgot_password.php" method="post">
 
    <div class="container">
        <label for="email_id"><b>Email Id</b></label><br>
        <i class="fas fa-envelope icon"></i>
    <input type="email" placeholder="Enter Email" name="email_id" size="35"
           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>        
            
        <label for="first_name"><b>Username</b></label><br>
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Enter first name" name="first_name" size="35" required><br>

    <button type="submit">Continue</button>
  </div>

  <div class="container">
      <span class="login">Back <a href="login.php">Login</a></span>
  </div>
</form>
    </div>
        </center>
</body>
</html>