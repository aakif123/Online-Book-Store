<!DOCTYPE html>
<html>
    <head>
        <title>Edit Products &bull; Response</title>
<style>
 body {
    background-image: url('img/n.jpg');
    font-family: serif, Arial;
    color: #f9f9f9;
 }
 
</style>
    </head>
<body>
    <?php
    
    //creating a session for successfull login
    session_start();
    
    //database connection
    require 'db_connection.php';
    
    //getting data from add products form
        $old_name = mysqli_real_escape_string($conn, $_POST['old_product_name']);
        $new_name = mysqli_real_escape_string($conn, $_POST['new_product_name']);
        $author = mysqli_real_escape_string($conn, $_POST['product_author']);
        $category = $_POST['product_category'];
        $cost = $_POST['product_cost'];
    
    $ed_query = "UPDATE products SET name ='$new_name' , author='$author', category ='$category' , cost ='$cost' WHERE name='$old_name' ";
    $ed_result = mysqli_query($conn, $ed_query);
    
    $er_query = "SELECT * FROM products WHERE name = '$new_name'";
    $er_result = mysqli_query($conn, $er_query);
    if(mysqli_num_rows($er_result)> 0)
      {
            echo "<script>alert('Product Edited Successful!');</script>";
            echo "<script>location.href ='admin_dashboard.php'</script>";
      }
    else {  
        echo "<script>alert('Error in editing products!');</script>";
        echo "<script>window.history.back();</script>";
    }

?>  
    </body>
</html>

