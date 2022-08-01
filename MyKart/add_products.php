<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Add Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
        body {background: url('img/1.jpg');
        font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }

#content {
        background-color: rgba(0,0,0,0.5);
        max-width: 400px;
        padding: 25px 20px;
        margin-top: 75px;
        margin-left: 525px;
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
        
        ?>
    
        
    <div id="content">
        <h2><center>Add Product Details</center></h2>

<form action="val_add_products.php" method="post">
    
    <div class="container">
        <label for="product_name" style="margin-left:10px"><b>Product Name</b></label>
         <input style="margin-left:50px" type="text" placeholder="Enter product name" name="product_name" required><br>
         
         <label for="product_author" style="margin-left:10px"><b>Author Name</b></label>
         <input style="margin-left:58px" type="text" placeholder="Enter author name" name="product_author" required><br>
         
         <label for="product_category" style="margin-left:10px"><b>Product Category</b></label>
         <input style="margin-left:15px" list="category" name="product_category" placeholder="Select category" required>
         <datalist id="category">
             <option value="Books">
             <option value="Novels">
             <option value="Others">
         </datalist><br>
         
         <label for="product_cost" style="margin-left:10px"><b>Product Cost</b></label>
         <input style="margin-left:52px" type="tel" placeholder="Enter cost" name="product_cost" required><br>
         
         <center><button type="submit">Add product</button></center>
    </div>
    
    <div class="container">
        <span class="dashboard">Back <a href="admin_dashboard.php">Dashboard</a></span>
  </div>
</form>
    </div>
    </body>
</html>
