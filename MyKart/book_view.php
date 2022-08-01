<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Book Description</title>
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
        
        p {font-size: 14px; font-family: 'Handlee', cursive; font-variant: normal; }
        
        .container{
            background-color: rgba(0,0,0,0.4);
            padding: 25px 20px;
            margin-top: 50px;
        }
        span.books{
    float: right;
}

        </style>
        </head>
    <body>
        <?php
  session_start();
  $proid = $_GET['proid'];
  
  //database connection
  require 'db_connection.php';
  
  $_SESSION['email_id'] = $_SESSION['email_id'];

  $p_query = "SELECT * FROM products WHERE product_id = '$proid'";
  $p_result = mysqli_query($conn, $p_query);
  $p_row = mysqli_fetch_assoc($p_result);

        ?>
        <div class="container">
            <p style="font-size: 28px; color: orange;"><?php echo $p_row['category']; ?> >> <?php echo $p_row['name']; ?> </p>
    <div class="row">
    <div class="col-md-3">
    <img class="img-rounded" src="<?php echo $p_row['book_image']; ?>" style="margin: 10px; width:225px; height:325px;">
    </div>
    <div class="col-md-9">
    <h3>Book Description</h3>
    <p> <?php echo $p_row['product_disc']; ?>....</p><br>
    <h3>Book Details</h3>
        <table class="table">
            <?php foreach($p_row as $key => $value){
            if($key == "product_disc" || $key == "book_image" || $key == "name"){
                continue;
            }
            switch($key){
                case "book_author":
                  $key = "Author";
                  break;
                case "category":
                  $key = "Category";
                  break;
                case "cost":
                  $key = "Price";
                  break;
            }
            ?>
        <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
        </tr>
        <?php } ?>
        </table>
            <form method="post" action="cart_view.php">
        <input type="hidden" name="proid" value="<?php echo $proid;?>">
        <button class="w3-btn w3-blue" type="submit" name="cart">Add to Cart</button>
        <span class="books"><a href="books_details.php"  class="w3-btn w3-deep-orange">View All Books</a></span>
            </form>
       	</div>
      </div>
        </div>
 </body>
</html>