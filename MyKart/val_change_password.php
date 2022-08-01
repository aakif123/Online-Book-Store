<!DOCTYPE html>
<html>
    <head>
        <title>Change Password &bull; Response</title>
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
    
    //getting data from signup form
        $email_id = $_SESSION['email_id'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password_repeat'];
    
    $e_query = "SELECT * FROM users WHERE email_id = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    if($password != $password_repeat)
        {
        $_SESSION['email_id'] = $email_id;
        echo "<script>alert('Passwords didn`t match!');</script>";
        echo "<script>window.history.back();</script>";
        }
    else {
    $password_query = "UPDATE users SET `password` = '$password' WHERE email_id = '$email_id'";
    $password_reult = mysqli_query($conn, $password_query) or die(mysqli_error($conn));
    
        echo "<script>alert('Password changed successfully!');</script>";
        echo "<script>location.href ='login.php'</script>";
        }
?>
        </form>  
    </body>
</html>

