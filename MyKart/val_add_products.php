<!DOCTYPE html>
<html>
    <head>
        <title>Add Products &bull; Response</title>
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
    
    //getting data from add products form
        $name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $author = mysqli_real_escape_string($conn, $_POST['product_author']);
        $category = $_POST['product_category'];
        $cost = $_POST['product_cost'];
        
    $pr_query = "SELECT * FROM products WHERE name = '$name'";
    $pr_result = mysqli_query($conn, $pr_query);
    if(mysqli_num_rows($pr_result)> 0)
      {
        echo "<script>alert('Product already exists!');</script>";
        echo "<script>window.history.back();</script>";
      }
    elseif(mysqli_num_rows($pr_result) === 0)
      {
          $add_query = "INSERT INTO products(name, author, category, cost) VALUES ('$name', '$author', '$category', '$cost')";
          $add_result = mysqli_query($conn, $add_query);
              
              echo "<script>alert('Product Added Successful!');</script>";
              echo "<script>location.href ='admin_dashboard.php'</script>";

      }
?>  
    </body>
</html>
