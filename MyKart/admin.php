<!DOCTYPE html>
<html>
<head>
    <title>Admin &bull; MyKart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        
body {background-image: url('img/back.png');
    font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }

#content {
        background-color: rgba(0,0,0,0.7);
        max-width: 400px;
        padding: 30px 20px;
        margin-top: 75px;
        color: #f9f9f9;
    }
    a{
        color: #0073e4;
        text-decoration: none;
    }
    a:hover { 
    opacity: 0.8;
  }
  
input[type=text], input[type=password] {
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

span.home{
    float: left;
}

</style>
</head>
<body>
    <center>
    <div id="content">
        <h2>MyKart Admin Login</h2>

        <form action="val_admin.php" method="post">
 
    <div class="container">
        <label for="first_name"><b>Username</b></label><br>
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Enter Username" name="first_name" size="35" required><br>

    <label for="password"><b>Password</b></label><br>
    <i class="fas fa-key icon"></i>
    <input type="password" placeholder="Enter Password" name="password" size="35"
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
           title="Must contain at least one number and one uppercase and 
           lowercase letter, and at least 6 or more characters" required><br>
        
    <button type="submit">Login</button>
  </div>

  <div class="container">
      <span class="home">Back <a href="home.php">Home</a></span>
  </div>
</form>
    </div>
        </center>
</body>
</html>