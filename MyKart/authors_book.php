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
            
        body {background: url('img/d5.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
        p {font-size: 16px; font-family: 'Handlee', cursive; font-variant: normal; }
        
        .caption {font-variant:normal; font-size: 14px;}
        
        .content{
            background-color: rgba(0,0,0,0.2);
            padding: 20px 15px;
        }

      span.dashboard{float: left}
      span.authors{float: right}
      span.books{float: right}
        </style>
    </head>
    <body>
        <?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $author =  $_GET["authorname"];
        
        $_SESSION['email_id'] = $_SESSION['email_id'];
        
        //getting authors data
        $au_query = "SELECT author_disc, author_image FROM authors WHERE author_name = '$author'";
        $au_result = mysqli_query($conn, $au_query)or die(mysqli_error($conn));
        $au_row = mysqli_fetch_array($au_result);
        
        //getting products data
        $pr_query = "SELECT product_id, name, author, category, cost, book_image FROM products where author='$author'";
        $pr_result = mysqli_query($conn, $pr_query)or die(mysqli_error($conn));
        
        ?>
        
    
    <div class="container">
        <div class="container">
            <br><center><h2>Author Details</h2>
                <h5>Choose products you need to purchase</h5></center>
    <span class="dashboard"><a href="user_dashboard.php" class="w3-btn w3-deep-orange">Back Dashboard</a></span>
    <span class="books"><a href="books_details.php" class="w3-btn w3-black">View All Books</a></span>
        </div><br>
        <div class="row content">
            <div class="col-md-3">
    <img class="img-rounded" src="<?php echo $au_row['author_image']; ?>" style="margin: 10px; width:180px; height:270px;">
    </div>
            <div class="col-md-9">
                <h2> <?php echo $author ?> </h2>
    <p> <?php echo $au_row['author_disc']; ?>...</p>
    <br><div class="span">
            <span class="authors"><a href="authors_name.php" class="w3-btn w3-pale-blue">View Authors</a></span>
      </div>
    </div>
        </div>
  <div class="row">
      <h2 style="color:black"><b>Books :</b></h2>
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
