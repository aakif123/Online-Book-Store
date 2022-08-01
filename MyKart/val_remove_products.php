<!DOCTYPE html>
<html>
    <head>
        <title>Remove Products &bull; Response</title>
<style>
 body {
    background-image: url('img/n.jpg');
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

    if(isset($_POST['product_name']))
    {
        for($i=0;$i<count($_POST['product_name']);$i++)
        {
            $delete_product = $_POST['product_name'][$i];
            $d_query = "DELETE FROM products WHERE name = '$delete_product'";
            $d_result = mysqli_query($conn, $d_query);
        }

            echo "<script>alert('Product Deleted Successful!');</script>";
            echo "<script>location.href ='admin_dashboard.php'</script>";
    }
    else {
            echo "<script>alert('Error in deleting products!');</script>";
            echo "<script>window.history.back();</script>";
        }
        
?>  
    </body>
</html>
