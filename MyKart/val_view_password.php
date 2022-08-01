<!DOCTYPE html>
<html>
    <head>
        <title>View Profile &bull; Response</title>
<style>
 body {
    background-image: url('img/d5.jpg');
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
        $email_id = $_SESSION['email_id'];
        $password = $_POST['password'];
        
    $ep_query = "SELECT * FROM users WHERE email_id = '$email_id' && password = '$password'";
    $ep_result = mysqli_query($conn, $ep_query);
          if(mysqli_num_rows($ep_result)>0)
          {     
              $_SESSION['email_id'] = $email_id;
              echo "<script>location.href ='view_profile.php'</script>";
          }
          else {
              $_SESSION['email_id'] = $email_id;
              echo "<script>alert('Password is incorrect!');</script>";
              echo "<script>window.history.back();</script>";
          }
?>
        </form>  
    </body>
</html>
