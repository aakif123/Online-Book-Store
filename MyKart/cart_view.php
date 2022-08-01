<?php
	session_start();
        
        $_SESSION['email_id'] = $_SESSION['email_id'];
        
        //database connection
        require 'db_connection.php';
        
	function getBookByproid($conn, $isbn){
            require 'db_connection.php';
		$b_query = "SELECT name, author, category, cost FROM products WHERE product_id = '$isbn'";
		$b_result = mysqli_query($conn, $b_query);
		return $b_result;
	}
        
        function getbookprice($isbn){
            require 'db_connection.php';
		$c_query = "SELECT cost FROM products WHERE product_id = '$isbn'";
		$c_result = mysqli_query($conn, $c_query);
                $c_row = mysqli_fetch_assoc($c_result);
		return $c_row['cost'];
	}
        
	function total_price($cart){
		$price = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $isbn => $qty){
		  		$bookprice = getbookprice($isbn);
		  		if($bookprice){
		  			$price += $bookprice * $qty;
		  		}
		  	}
		}
		return $price;
	}

	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $isbn => $qty){
				$items += $qty;
			}
		}
		return $items;
        }

	// book_isbn got from form post method, change this place later.
	if(isset($_POST['proid'])){
		$proid = $_POST['proid'];
	}

	if(isset($proid)){
		// new iem selected
		if(!isset($_SESSION['cart'])){
			// $_SESSION['cart'] is associative array that bookisbn => qty
			$_SESSION['cart'] = array();

			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$proid])){
			$_SESSION['cart'][$proid] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$proid]++;
			unset($_POST);
		}
	}

	// if save change button is clicked , change the qty of each bookisbn
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $isbn =>$qty){
			if($_POST[$isbn] == '0'){
				unset($_SESSION['cart']["$isbn"]);
			} else {
				$_SESSION['cart']["$isbn"] = $_POST["$isbn"];
			}
		}
	}

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyKart &bull; Your Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <style>
            
        body {background: url('img/pa.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
        td {font-size: 14px; font-family: 'Handlee', cursive; font-variant: normal; }
        
        th { color: #fcba03;}
        
        h3, li{
            color: whitesmoke;
        }
        
        #content{
            background-color: rgba(0,0,0,0.4);
            max-width: 1100px;
            padding: 25px 20px;
            margin-top: 40px;
            margin-left: 250px;
            margin-bottom: 40px;
        }
  
  input[type=number] {
  padding: 4px 10px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid whitesmoke;
  box-sizing: border-box;
  background-color: whitesmoke;
  color: black; font-style: italic; font-family: sans-serif;
}

.container {
    max-width: 1000px;
  padding: 12px;
}

span.continue{
    float: left;
}

button.save{
    float: right;
}

        </style>
        </head>
    <body>
        <div id="content">
<form action="cart_view.php" method="post">
    <center>
    <h2 style="font-size:26px;">Your Cart</h2>
        <div class="container">
	   	<table class="table">
                    <thead>
	   		<tr>
	   			<th>Book</th>
	   			<th>Cost</th>
	  			<th>Quantity *</th>
	   			<th>Final Price</th>
	   		</tr>
                    </thead>
	   		<?php
		    	foreach($_SESSION['cart'] as $isbn => $qty){
                            require 'db_connection.php';
					$book = mysqli_fetch_assoc(getBookByproid($conn, $isbn));
			?>
                    <tbody>
			<tr>
				<td><?php echo "<b>". $book['name'] . "</b><br>&nbsp;&nbsp;&nbsp;". $book['category'] ." by " . $book['author']; ?></td>
				<td><?php echo "₹ " . $book['cost']; ?></td>
                                <td><input type="number" value="<?php echo $qty; ?>" min="0" max="3" name="<?php echo $isbn; ?>"></td>
				<td><?php echo "₹ " . $qty * $book['cost']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
                        <td></td>
		    	<td></td>
		    	<td>Quantity : <?php echo $_SESSION['total_items']; ?></td>
		    	<td>Total Cost : <?php echo "₹ " . $_SESSION['total_price']; ?></td>
		    </tr>
                    </tbody>
	   	</table>
    
            <span><a href="payments.php" class="w3-btn w3-blue">Make Payment</a></span>
    
        </div>
                
    <div class="container">
        <button class="w3-btn w3-green save" type="submit" name="save_change">Save Changes</button>
      <span class="continue"><a href="books_details.php" class="w3-btn w3-deep-orange">Continue Shopping</a></span>
    </div>
    </center>
	</form>
            <hr/>
	 
            <div>
                <h3>* Note :</h3>
                <ul>
                    <li>To order more than 1 quantity of same book, select following number from list.</li>
                    <li>You can order maximum of 3 quantity of same book at a time.</li>
                    <li>To remove a book, select number 0 from list.</li>
                    <li>Click on <u>Save Changes</u> after making change's in your cart.</li>
                </ul>
            </div>
	
<?php 
	} else { 
            require_once "empty_cart.php";
	}
?>
        </div>
</body>
</html>