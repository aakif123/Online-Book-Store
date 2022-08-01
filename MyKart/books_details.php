<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Order Books</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <style>
            
      body { background: url('img/d5.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
      .caption {font-variant:normal; font-size: 14px;}

      span.dashboard{float: left;}
      span.authors{float: right;}
        
        </style>
    </head>
    <body>
        <?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $_SESSION['email_id'] = $_SESSION['email_id'];
        
        //getting products data
        $pr_query = "SELECT product_id, name, author, category, cost, book_image FROM products";
        $pr_result = mysqli_query($conn, $pr_query);
        
        ?>
        
    
    <div class="container">
        <div class="container">
            <br><center><h2>Product Details</h2>
                <h5>Choose products you need to purchase</h5></center>
    <span class="dashboard"><a href="user_dashboard.php" class="w3-btn w3-deep-orange">Back Dashboard</a></span>
    <span class="authors"><a href="authors_name.php" class="w3-btn w3-black">View Authors</a></span>
        </div><br>
  <div class="row">
      <?php while ($pr_row = mysqli_fetch_array($pr_result)) { ?>
      <div class="col-md-2">
      <div class="thumbnail">
          <a href="book_view.php?proid=<?php echo $pr_row['product_id']; ?>">
          <img src="<?php echo $pr_row['book_image']; ?>" alt="<?php echo $pr_row['name']; ?>" style="width:175px; height:250px;">
          <div class="caption">
              <b><?php echo $pr_row['name']; ?></b><br>by <?php echo $pr_row['author']; ?>
          </div>    </a>
      </div>
    </div>
      <?php } ?>
  </div>
    </div>
        </body>
</html>
