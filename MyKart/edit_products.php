<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Edit Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
        body {background: url('img/1.jpg');
        font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }

#content {
        background-color: rgba(0,0,0,0.5);
        max-width: 450px;
        padding: 25px 20px;
        margin-top: 50px;
        margin-left: 500px;
        color: #f9f9f9;
    }
    
    a{
        color: orange;
        text-decoration: none;
    }
    a:hover { 
    opacity: 0.8;
  }
  
input[type=text], input[type=tel], input[list] {
  padding: 8px 18px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: #ffffff;
  color: #191919; font-style: italic; font-family: sans-serif;
}

button {
  background-color: black;
  color: #f9f9f9; font-style: italic; font-family: sans-serif; font-variant: small-caps;
  padding: 12px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 12px;
}

span.dashboard{
    float: left;
}
        
        </style>
    </head>
    <body>
        <?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        //getting products data
        $pr_query = "SELECT name, author, category FROM products";
        $pr_result = mysqli_query($conn, $pr_query);
        
        ?>
    
    <div id="content">
        <h2><center>Edit Product Details</center></h2>

<form action="val_edit_products.php" method="post">
    <div class="container">
        <label for="old_product_name" style="margin-left:10px"><b>Current Product Name</b></label>
         <input style="margin-left:15px" list="name" name="old_product_name" placeholder="Select product" required>
         <datalist id="name">
             <?php while ($pr_row = mysqli_fetch_array($pr_result)) { ?>
             <option value="<?php echo $pr_row['name']; ?>">
                 <?php } ?> 
         </datalist><br>
         
         <label for="new_product_name" style="margin-left:10px"><b>New Product Name</b></label>
         <input style="margin-left:50px" type="text" placeholder="Enter new name" name="new_product_name" required><br>
         
         <label for="product_author" style="margin-left:10px"><b>Author Name</b></label>
         <input style="margin-left:95px" type="text" placeholder="Enter author name" name="product_author" required><br>
         
        <label for="product_category" style="margin-left:10px"><b>Product Category</b></label>
         <input style="margin-left:52px" list="category" name="product_category" placeholder="Select category" required>
         <datalist id="category">
             <option value="Books">
             <option value="Novels">
             <option value="Others">
         </datalist><br>
                
         <label for="product_cost" style="margin-left:10px"><b>Product Cost</b></label>
         <input style="margin-left:90px" type="tel" placeholder="Enter cost" name="product_cost" pattern="[0-9]{}" 
                title="Must contain digit's only." required><br>  
         
         <center><button type="submit">Edit product</button></center>
    </div>
    
    <div class="container">
        <span class="dashboard">Back <a href="admin_dashboard.php">Dashboard</a></span>
  </div>
</form>
    </div>
        </center>
    </body>
</html>
