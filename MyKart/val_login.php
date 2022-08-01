<!DOCTYPE html>
<html>
    <head>
        <title>Login &bull; Response</title>
<style>
 body {
    background-image: url('img/back.png');
    font-family: serif, Arial;
 }
 
</style>
    </head>
<body>
    <?php
    
    //creating a session for successfull login
    session_start();
    
    //database connection
    require 'db_connection.php';
    
    //getting data from login form
        $email_id = $_POST['email_id'];
        $password = $_POST['password'];
        
    $e_query = "SELECT * FROM users WHERE email_id = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    if(mysqli_num_rows($e_result) === 0)
      {
        echo "<script>alert('User with email  `$email_id`  dosn`t exists!');</script>";
        echo "<script>location.href ='signup.php'</script>";
      }
    elseif(mysqli_num_rows($e_result)>0)
      {
          $ep_query = "SELECT * FROM users WHERE email_id = '$email_id' && password = '$password'";
          $ep_result = mysqli_query($conn, $ep_query);
          if(mysqli_num_rows($ep_result)>0)
          {     
                $se_query = "SELECT first_name FROM users WHERE email_id = '$email_id'";
                $se_result = mysqli_query($conn, $se_query);
                $se_row = mysqli_fetch_array($se_result);
                $_SESSION['first_name'] = $se_row['first_name'];
                $_SESSION['email_id'] = $email_id;
              
              echo "<script>alert('Login to MyKart Successful!');</script>";
              echo "<script>location.href ='user_dashboard.php'</script>";
          }
          else {
              echo "<script>alert('Email id or Password is incorrect!');</script>";
              echo "<script>window.history.back();</script>";
          }
      }
?>
        </form>  
    </body>
</html>
