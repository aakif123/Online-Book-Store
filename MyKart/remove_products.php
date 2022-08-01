<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Remove Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
        body {background: url('img/1.jpg');
        font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }
        
        #content {
        background-color: rgba(0,0,0,0.4);
        max-width: 900px;
        padding: 25px 20px;
        margin-top: 50px;
        color: #f9f9f9;
    }
    
    i{color: orange;}

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
        $pr_query = "SELECT name, author, category, cost FROM products";
        $pr_result = mysqli_query($conn, $pr_query);
        
        ?>
    <center>
        <div id="content">
        <form action="val_remove_products.php" method="post">
    <div id="container">
    <div class="row"> 
        <div><h3> Remove Product Details </h3></div><br>
    </div>
        <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
        <?php while ($pr_row = mysqli_fetch_array($pr_result)) { ?>
        <tr>
            <td><center><input type="checkbox" name="product_name[]" value="<?php echo $pr_row['name']; ?>"></center></td>
            <td><?php echo $pr_row['name']; ?></td>
            <td><?php echo $pr_row['author']; ?></td>
            <td><?php echo $pr_row['category']; ?></td>
            <td><?php echo $pr_row['cost']; ?></td>
        </tr>
        <?php } ?>
            </tbody>
            </table>
    
        <button class="w3-btn w3-orange" type="submit">Remove product</button>
    </div>
        
    <div class="container">
        <span class="dashboard"><a href="admin_dashboard.php" class="w3-btn w3-black">Back <i>Dashboard</i></a></span>
  </div>
</form>
        </div>
            </center>
    </body>
</html>
