<!DOCTYPE html>
<html>
    <head>
        <title>Admin &bull; Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
        <style>
        body {background: url('img/wallhaven-oxeyr5.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
        #container{
            font-family: serif, Arial;
            color: #f9f9f9;
            background-color: rgba(0,0,0,0.3);
            max-width: 1400px;
            margin-top: 50px;
            padding: 10px 20px;
        }
        
        .navbar{
        background-color: #060606;
        }
        
        </style>
    </head>
    <body>
        <?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        //getting admin name
        $adminfirstname = $_SESSION['first_name'];
        
        //getting users data
        $u_query = "SELECT user_id, first_name, last_name, phone_no, email_id, pincode, registration_time, password FROM users";
        $u_result = mysqli_query($conn, $u_query);
        
        //getting products data
        $pr_query = "SELECT product_id, name, author, category, cost FROM products";
        $pr_result = mysqli_query($conn, $pr_query);
        
        //getting orders data
        $o_query = "SELECT order_id, user_id, product_id, product_name, cost, purchase_time FROM orders";
        $o_result = mysqli_query($conn, $o_query);
        
        //getting payments data
        $py_query = "SELECT payment_id, order_id, user_id, full_name, phone_no, address, city, state, pincode, card_name, card_no, expiry_date, cvv, amount_paid, quantity, payment_time FROM payments";
        $py_result = mysqli_query($conn, $py_query);
        ?>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <li> <a href="admin_dashboard.php" class="navbar-brand"><span class="glyphicon glyphicon-book"></span> MyKart</a> </li>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a class="navbar-brand"><i>Hello, <?php echo $adminfirstname; ?></i> </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-th-list"></i> Manage</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Products</li>
                        <li><a href="add_products.php"><i class="fas fa-plus-circle"></i> Add Products</a></li>
                        <li><a href="remove_products.php"><i class="fas fa-times-circle"></i> Remove Products</a></li>
                        <li><a href="edit_products.php"><i class="fas fa-edit"></i> Edit Products</a></li>
                    </ul>
                    </li>
                    
                    <li> <a href="logout_admin.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
    <center>
        <div id="container">
            <div class="row"> 
                <div><h3> MyKart - Users </h3></div>
            </div>
            <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Email Id</th>
                    <th>Postal Address</th>
                    <th>Registration Time</th>
                    <th>Login Password</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($u_row = mysqli_fetch_array($u_result)) { ?>
                <tr>
                    <td><?php echo $u_row['user_id']; ?></td>
                    <td><?php echo $u_row['first_name']; ?></td>
                    <td><?php echo $u_row['last_name']; ?></td>
                    <td><?php echo $u_row['phone_no']; ?></td>
                    <td><?php echo $u_row['email_id']; ?></td>
                    <td><?php echo $u_row['pincode']; ?></td>
                    <td><?php echo $u_row['registration_time']; ?></td>
                    <td><?php echo $u_row['password']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            
            <div class="row"> 
                <div><h3> MyKart - Products </h3></div>
            </div>
            <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($pr_row = mysqli_fetch_array($pr_result)) { ?>
                <tr>
                    <td><?php echo $pr_row['product_id']; ?></td>
                    <td><?php echo $pr_row['name']; ?></td>
                    <td><?php echo $pr_row['author']; ?></td>
                    <td><?php echo $pr_row['category']; ?></td>
                    <td><?php echo $pr_row['cost']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            
            <div class="row"> 
                <div><h3> MyKart - Orders </h3></div>
            </div>
            <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>User Id</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Cost</th>
                    <th>Purchase Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($o_row = mysqli_fetch_array($o_result)) { ?>
                <tr>
                    <td><?php echo $o_row['order_id']; ?></td>
                    <td><?php echo $o_row['user_id']; ?></td>
                    <td><?php echo $o_row['product_id']; ?></td>
                    <td><?php echo $o_row['product_name']; ?></td>
                    <td><?php echo $o_row['cost']; ?></td>
                    <td><?php echo $o_row['purchase_time']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            
            <div class="row"> 
                <div><h3> MyKart - Payments </h3></div>
            </div>
            <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th>Payment Id | Order Id | User Id</th>
                    <th>Full Name | Phone No</th>
                    <th>Address</th>
                    <th>City | State | Pincode</th>
                    <th>Name On Card</th>
                    <th>Card No | Expiry Date | CVV</th>
                    <th>Quantity | Amount Paid</th>
                    <th>Payment Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($py_row = mysqli_fetch_array($py_result)) { ?>
                <tr>
                    <td><?php echo $py_row['payment_id']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['order_id']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['user_id']; ?></td>
                    <td><?php echo $py_row['full_name']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['phone_no']; ?></td>
                    <td><?php echo $py_row['address']; ?></td>
                    <td><?php echo $py_row['city']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['state']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['pincode']; ?></td>
                    <td><?php echo $py_row['card_name']; ?></td>
                    <td><?php echo $py_row['card_no']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['expiry_date']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $py_row['cvv']; ?></td>
                    <td><?php echo $py_row['quantity']; ?> &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo "₹ " . $py_row['amount_paid']; ?></td>
                    <td><?php echo $py_row['payment_time']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </center>
    </body>
</html>
