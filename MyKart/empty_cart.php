<!DOCTYPE html>
<html>
    <head>
        <title>Cart &bull; Response</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    <style>
            
        body {background: url('img/pa.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
        #content{
            background-color: rgba(0,0,0,0.4);
            max-width: 600px;
            padding: 25px 20px;
            margin-top: 50px;
        }
        
        .container {
    max-width: 500px;
  padding: 12px;
}

        </style>
    <body>
    <center>
        <div id="content">
            <h2 style="font-size:26px;">Your Cart</h2><br>
        <div class="alert alert-warning">
            <strong> Cart Empty! </strong><br> Your MyKart Basket is empty. <a href="books_details.php" class="alert-link"> Add Products</a>.
        </div><br><br>
        <div class="container">
      <span><a href="books_details.php" class="w3-btn w3-deep-orange">Continue Shopping</a></span>
    </div>
        </div>
    </center>
    </body>
</html>
