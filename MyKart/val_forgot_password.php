<<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password &bull; Response</title>
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
        $first_name = $_POST['first_name'];
        
    $e_query = "SELECT * FROM users WHERE email_id = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    if(mysqli_num_rows($e_result) === 0)
      {
        echo "<script>alert('User with email  `$email_id`  dosn`t exists!');</script>";
        echo "<script>location.href ='forgot_password.php'</script>";
      }
    elseif(mysqli_num_rows($e_result)>0)
      {
          $ep_query = "SELECT * FROM users WHERE email_id = '$email_id' && first_name = '$first_name'";
          $ep_result = mysqli_query($conn, $ep_query);
          if(mysqli_num_rows($ep_result)>0)
          {     
              $_SESSION['email_id'] = $email_id;
              echo "<script>location.href ='change_password.php'</script>";
          }
          else {
              echo "<script>alert('Email id or Username is incorrect!');</script>";
              echo "<script>window.history.back();</script>";
          }
      }
?>
        </form>  
    </body>
</html>
