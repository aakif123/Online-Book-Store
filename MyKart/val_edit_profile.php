<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile &bull; Response</title>
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
        
    //getting data from signup form
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];
        $pincode = $_POST['pincode'];
        $email_id =  $_SESSION['email_id'];
    
    $users_edit_query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', phone_no = '$phone_no', pincode = '$pincode' WHERE email_id ='$email_id' ";
    $users_edit_result = mysqli_query($conn, $users_edit_query) or die(mysqli_error($conn));
    
        $_SESSION['email_id'] = $email_id;
        echo "<script>alert('Your details are saved successfully in MyKart!');</script>";
        echo "<script>window.location.href ='view_profile.php'</script>";
        
?>
        </form>  
    </body>
</html>
