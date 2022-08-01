<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MyKart &bull; Book Authors</title>
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
        
    .box{ width:100%; overflow:hidden; }

    .left{ float: left; width: 400px; color : #191919; }
    
    .right{ float: right; width: 400px; color : #191919; }

    span.dashboard{ float: left; }
</style>
    </head>
    <body>
        <?php
        
        //creating a session for successfull login
        session_start();
        
        //database connection
        require 'db_connection.php';
        
        $_SESSION['email_id'] = $_SESSION['email_id'];
        
        ?>
        
        <div class="container">
        <div class="container">
            <br><center><h2>Author Details</h2>
                <h5>Choose an author to view there books.</h5></center>
    <span class="dashboard"><a href="user_dashboard.php" class="w3-btn w3-deep-orange">Back Dashboard</a></span>
        </div><br>
        
    <div class=box> 
        <h2><b>List Of Authors</b></h2><br>
    <div class="left">
        <ul class="list-group">
            <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'J.K. Rowling';?>">J.K. Rowling </a><span class="badge">Books &nbsp; 2</span></li>
            <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Dan Brown';?>">Dan Brown </a><span class="badge">Books &nbsp; 2</span></li>
           <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Paulo Coelho';?>">Paulo Coelho </a><span class="badge">Books &nbsp; 3</span></li>
           <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Kahlil Gibran';?>">Kahlil Gibran </a><span class="badge">Books &nbsp; 2</span></li>
           <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'George Orwell';?>">George Orwell </a><span class="badge">Books &nbsp; 2</span></li>
           <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Markus Zusak';?>">Markus Zusak </a><span class="badge">Books &nbsp; 2</span></li>
        </ul>
    </div>
            
    <div class="right">
       <ul class="list-group">
          <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Hafsah Faizal';?>">Hafsah Faizal </a><span class="badge">Books &nbsp; 2</span></li>
          <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Téa Obreht';?>">Téa Obreht </a><span class="badge">Books &nbsp; 2</span></li>
          <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'H.G. Wells';?>">H.G. Wells </a><span class="badge">Books &nbsp; 3</span></li>
          <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'Louis Stevenson';?>">Robert Louis Stevenson </a><span class="badge">Books &nbsp; 2</span></li>
          <li class="list-group-item"><a href="authors_book.php?authorname=<?php echo'A.P.J. Abdul Kalam';?>">A.P.J. Abdul Kalam </a><span class="badge">Books &nbsp; 2</span></li>
       </ul>
        </div>
        
    </div><br>
        <center><div class="span">
            <span class="books"><a href="books_details.php" class="w3-btn w3-pale-blue">View All Books</a></span>
      </div></center><br>
        </div>
    </body>
</html>
