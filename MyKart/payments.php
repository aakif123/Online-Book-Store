<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Payments</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {background-image: url('img/pa.jpg');
    font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9; }
    
     td {font-family: 'Handlee', cursive; font-variant: normal; }
        
     h3,  p, th { color: #fcba03;}

#content {
        background-color: rgba(0,0,0,0.4);
        max-width: 780px;
        padding: 25px 20px;
        margin-top: 40px;
        margin-left: 400px;
        margin-bottom: 40px;
    }
    
    input[type=text], input[type=tel] {
  padding: 6px 16px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 2px;
  background-color: #ffffff;
  color: #191919; font-style: italic; font-family: sans-serif; font-variant: normal;
}

span.cancel{
    float: right;
}

span.continue{
    float: left;
}

</style>
    </head>
    <body>
    <?php
        
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $_SESSION['email_id'] = $_SESSION['email_id'];
        $total_price =$_SESSION['total_price'];
        $total_items =$_SESSION['total_items'];
        
        function getBookByproid($conn, $isbn)
        {    require 'db_connection.php';
             $b_query = "SELECT name, author, category, cost FROM products WHERE product_id = '$isbn'";
             $b_result = mysqli_query($conn, $b_query);
	      return $b_result;
	}
        
        if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
        
    ?>
        
        <div id="content">
            <center>
    <h3>Cart Details</h3>
            </center>
	   	<table class="table table-condensed">
                    <thead>
	   		<tr>
	   			<th>Books</th>
	  			<th>Quantity</th>
	   			<th>Cost</th>
	   		</tr>
                    </thead>
                    <tbody>
                        <?php   foreach($_SESSION['cart'] as $isbn => $qty)
                            {   require 'db_connection.php';
				$book = mysqli_fetch_assoc(getBookByproid($conn, $isbn)); ?>
                        <tr>
                            <td><?php echo $book['name']; ?></td>
                            <td><?php echo $qty; ?></td>
                            <td><?php echo "₹ " . $qty * $book['cost']; ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>--- Shipping Charges ---</td>
                            <td></td>
                            <td>₹ 40</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p><b>Total Cost =</b></p></td>
                            <td><p><b><?php echo "₹ " . ($total_price + 40); ?></b></p></td>
                        </tr>
                    </tbody>
                </table>
            <hr/>
        <?php } ?>
            
            
            <form action="val_payments" method="post">
      
          <center><h3>Shipping Address</h3></center>
            <label for="fname" style="margin-left:10px">Full Name</label>
            <input style="margin-left:15px" type="text" name="full_name" placeholder="Enter Full Name" maxlength="30" size="25" required>
            
            <label for="phone_no" style="margin-left:30px">Phone Number</label>
            <input style="margin-left:15px" type="tel" placeholder="Enter Phone no" name="phone_no" maxlength="10" size="15" pattern="[0-9]{10}" 
             title="Must contain 10 digit mobile number only." required><br>
            
            <label for="address" style="margin-left:10px">Address</label>
            <input style="margin-left:28px" type="text" name="address" placeholder="Enter Address" maxlength="100" size="70" required><br>
            
            <label for="city" style="margin-left:10px">City</label>
            <input style="margin-left:20px" type="text" name="city" placeholder="Enter City" maxlength="30" size="15" required>
            
            <label for="state" style="margin-left:15px">State</label>
            <input style="margin-left:15px" type="text" name="state" placeholder="Enter State" maxlength="30" size="15" required>
            
            <label for="pincode" style="margin-left:15px">Pincode</label>
            <input style="margin-left:15px" type="tel" placeholder="Enter Pincode" name="pincode" maxlength="6" size="15" pattern="[0-9]{6}" 
             title="Must contain 6 digit pin code only." required><br>
            <hr/>

            <center><h3>Payment Details</h3></center>
            <label for="fname" style="margin-left:10px; font-size: 18px;">Accepted Cards &nbsp; &nbsp;</label>
            <img src="img/cards.png" class="w3-round-small" alt="Norway" style="height:30px;"><br>
            <label for="card_name" style="margin-left:10px">Name on Card</label>
            <input style="margin-left:15px" type="text" name="card_name" placeholder="Enter Name" maxlength="30" size="25" required><br>
            
            <label for="card_number" style="margin-left:10px">Card number</label>
            <input style="margin-left:20px" type="text" placeholder="1111-2222-3333-4444" name="card_no" maxlength="19" size="22" pattern="[0-9]+-[0-9]+-[0-9]+-[0-9]{4,4}$" 
             title="Must contain 16 digit card number in 1111-2222-3333-4444 format only." required>
            
            <label for="expiry_date" style="margin-left:15px">Expiry Date</label>
            <input style="margin-left:10px" type="text" name="expiry_date" placeholder="MM/YY" maxlength="5" size="6" pattern="[0-9]+/[0-9]{2,2}$" 
             title="Must contain expiry date in MM/YY format only." required>
            
            <label for="cvv" style="margin-left:15px">CVV</label>
            <input style="margin-left:10px" type="text" name="cvv" placeholder="123" maxlength="3" size="5" pattern="[0-9]{3,3}" 
             title="Must contain 3 digit cvv number only." required><br>
            <hr/>
            
            <center><button class="w3-btn w3-black" type="submit">Place Order</button></center>
      </form>
            <br>
            <div>
            <span class="cancel"><a href="user_dashboard.php" class="w3-btn w3-blue">Cancel Order</a></span>
            <span class="continue"><a href="books_details.php" class="w3-btn w3-deep-orange">Continue Shopping</a></span>
            </div>
            <br>
    </div>
    </body>
</html>