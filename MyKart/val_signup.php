<!DOCTYPE html>
<html>
    <head>
        <title>Sign up &bull; Response</title>
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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];
        $pincode = $_POST['pincode'];
        $email_id = $_POST['email_id'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password_repeat'];
    
    $e_query = "SELECT * FROM users WHERE email_id = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    $p_query = "SELECT * FROM users WHERE phone_no = '$phone_no'";
    $p_result = mysqli_query($conn, $p_query);
    if((mysqli_num_rows($p_result)>0) && (mysqli_num_rows($e_result)>0))
        {
        echo "<script>alert('This Email & Phone no already associated with another account!');</script>";
        echo "<script>window.history.back();</script>";
        }
    elseif((mysqli_num_rows($p_result)>0) || (mysqli_num_rows($e_result)>0))
        {
        echo "<script>alert('This Email or Phone no already associated with another account!');</script>";
        echo "<script>window.history.back();</script>";
        }
    elseif($password != $password_repeat)
        {
        echo "<script>alert('Passwords didn`t match!');</script>";
        echo "<script>window.history.back();</script>";
        }
    else {
    $users_signup_query = "insert into users (first_name, last_name, phone_no, pincode, email_id, password) values ('$first_name', '$last_name', '$phone_no', '$pincode', '$email_id', '$password' )";
    $users_signup_submit = mysqli_query($conn, $users_signup_query) or die(mysqli_error($conn));
    
        echo "<script>alert('You have successfully registered to MyKart');</script>";
        echo "<script>window.location.href ='login.php'</script>";
        }
?>
        </form>  
    </body>
</html>
