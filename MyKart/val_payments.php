<?php
        
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $email_id = $_SESSION['email_id'];
        $total_price =$_SESSION['total_price'];
        $total_items =$_SESSION['total_items'];
        $amount_paid = $total_price + 40;
        
        $uid_query = "SELECT user_id FROM users WHERE email_id = '$email_id'";
        $uid_result = mysqli_query($conn, $uid_query);
        $uid_row = mysqli_fetch_array($uid_result);
        $user_id = $uid_row['user_id'];
        
        if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
        
        function getBookByproid($conn, $isbn)
        {    require 'db_connection.php';
             $b_query = "SELECT product_id, name, author, category, cost FROM products WHERE product_id = '$isbn'";
             $b_result = mysqli_query($conn, $b_query);
	      return $b_result;
	}
    }
    
    foreach($_SESSION['cart'] as $isbn => $qty)
        {   require 'db_connection.php';
	    $book = mysqli_fetch_assoc(getBookByproid($conn, $isbn));
            $name = $book['name'];
            $cost = $qty * $book['cost'];
    $o_query = "INSERT INTO orders (user_id, product_id, product_name, cost) VALUES ('$user_id', '$isbn', '$name', '$cost')";
    $o_result = mysqli_query($conn, $o_query) or die(mysqli_error($conn));
       }
       
    if ($o_result) {
  $order_id = mysqli_insert_id($conn);
}
    
    //database connection
    require 'db_connection.php';
    
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    
    $card_name = $_POST['card_name'];
    $card_no = mysqli_real_escape_string($conn, $_POST['card_no']);
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
    $cvv = $_POST['cvv'];
    
    $pay_query = "INSERT INTO payments ( order_id, user_id, full_name, phone_no, address, city, state, pincode, card_name, card_no, expiry_date, cvv, amount_paid, quantity ) VALUES ( '$order_id', '$user_id', '$full_name', '$phone_no', '$address', '$city', '$state', '$pincode', '$card_name', '$card_no', '$expiry_date', '$cvv', '$amount_paid', '$total_items' )";
    $pay_result = mysqli_query($conn, $pay_query);
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment &bull; Response</title>
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
  padding: 12px; }
        
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 160px;
  height: 160px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}
#loade {
  position: absolute;
  left: 35%;
  top: 65%;
  font-size: 16px; background-color: rgba(0,0,0,0.4);
  font-style:normal; font-family: 'Handlee', cursive; font-variant: normal;
  }

@-webkit-keyframes spin {
  10% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  10% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 2s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
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
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
<div id="loade">&nbsp; Payment processing... &nbsp;Please don't go back or refresh the page. &nbsp;</div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 <center> <div id="content">
            <h2 style="font-size:26px;">Order Placed Successfully.</h2>
            <h4 style="font-size:18px;">Payment Successfully.</h4>
        <div class="alert alert-success">
            Your order was placed successfully, will be delivered in few day's.<br><strong>Thank You</strong> for shopping with us.
        </div><br><br>
        <div class="container">
            <span><a href="user_dashboard.php" class="w3-btn w3-deep-orange">Back Dashboard</a></span>
    </div>
        </div></center>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("loade").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

    </body>
</html>
