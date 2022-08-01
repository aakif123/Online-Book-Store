<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login &bull; Response</title>
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
        $admin_email = $_POST['first_name'];
        $password = $_POST['password'];
        
        $a_query = "SELECT * FROM admin WHERE email_id = '$admin_email' && password = '$password'";
        $a_result = mysqli_query($conn, $a_query);
        if(mysqli_num_rows($a_result)>0)
          {
             $ad_query = "SELECT first_name FROM admin WHERE email_id = '$admin_email'";
                $ad_result = mysqli_query($conn, $ad_query);
                $ad_row = mysqli_fetch_array($ad_result);
              $_SESSION['first_name'] = $ad_row['first_name'];
            echo "<script>alert('Admin login to MyKart Successful!');</script>";
            echo "<script>location.href ='admin_dashboard.php'</script>";
          }
        else {
            echo "<script>alert('Username or Password is incorrect!');</script>";
            echo "<script>window.history.back();</script>";
          }
?>  
    </body>
</html>
