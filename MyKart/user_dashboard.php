<!DOCTYPE html>
<html>
    <head>
        <title>User &bull; Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
        <style>
            
        body {background: url('img/d5.jpg');
              font-style: italic; font-family: sans-serif; font-variant: small-caps; color: #f9f9f9;
        }
        
        #container{
            color: #f9f9f9;
        }
        
        p {font-variant:normal}
        
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
        
        $userfirstname =  $_SESSION['first_name'];
        
        $_SESSION['email_id'] = $_SESSION['email_id'];

        ?>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <li> <a href="user_dashboard.php" class="navbar-brand"><span class="glyphicon glyphicon-book"></span> MyKart</a> </li>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a class="navbar-brand"> Hello, <?php echo $userfirstname; ?> </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Manage Orders</li>
                        <li><a href="authors_name.php"><i class="fas fa-cart-plus"></i> Order Books</a></li>
                        <li><a href="cart_view.php"><i class="fas fa-shopping-basket"></i> View Basket</a></li>
                    </ul>
                    </li>
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> My Account</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Manage Profile</li>
                        <li><a href="view_password.php"><i class="fas fa-user-shield"></i> View Profile</a></li>
                        <li><a href="edit_password.php"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                    </ul>
                    </li>
                    
                    <li> <a href="logout_user.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <br><br><br>
    <marquee direction="left"> <b>Dear <?php echo $userfirstname; ?>, Enjoy life as a student !!</b></marquee>
    
            <div class="container">
                <h2><b>Books Gallery</b></h2>
  <div class="row">
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Harry Potter.jpg" alt="Harry Potter" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Harry Potter.</b><br>by J.K. Rowling</p>
          </div>
      </div>
    </div>
     <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Deception Point.jpg" alt="Deception Point" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Deception Point.</b><br>by Dan Brown</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/The Alchemist.jpg" alt="The Alchemist" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>The Alchemist.</b><br>by Paulo Coelho</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/The Prophet.jpg" alt="The Prophet" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>The Prophet.</b><br>by Kahlil Gibran</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Treasure Island.jpg" alt="Treasure Island" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Treasure Island.</b><br>by Louis Stevenson</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Drunkards Walk.jpg" alt="Drunkards Walk" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Drunkard's Walk.</b><br>by Leonard Mlodinow</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/We Hunt The Flame.jpg" alt="We Hunt The Flame" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>We Hunt The Flame.</b><br>by Hafsah Faizal</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/We Free The Stars.jpg" alt="We Free The Stars" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>We Free The Stars.</b><br>by Hafsah Faizal</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/A Promised Land.png" alt="A Promised Land" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>A Promised Land.</b><br>by Barack Obama</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Wings of Fire.jpeg" alt="Wings of Fire" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Wings of Fire.</b><br>by A.P.J Abdul Kalam</p>
          </div>
      </div>
    </div>
     <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Tigers Wife.jpg" alt="The Tiger's Wife" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>The Tiger's Wife.</b><br>by Téa Obreht</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Deep Works.jpg" alt="Deep Work" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Deep Work.</b><br>by Cal Newport</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/The Book Thief.jpg" alt="The Book Thief" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>The Book Thief.</b><br>by Markus Zusak</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Train Dreams.jpg" alt="Train Dreams" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Train Dreams.</b><br>by Denis Johnson</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Animal Farm.jpg" alt="Animal Farm" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Animal Farm.</b><br>by George Orwell</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Fahrenheit 451.jpg" alt="Fahrenheit 451" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>Fahrenheit 451.</b><br>by Ray Bradbury</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/Five point someone.jpg" alt="Five Point Someone" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>5 Point Someone.</b><br>by Chetan Bhagat</p>
          </div>
      </div>
    </div>
      <div class="col-md-2">
      <div class="thumbnail">
          <img src="img/books/The Time Machine.jpg" alt="The Time Machine" style="width:175px; height:250px;">
          <div class="caption">
              <p><b>The Time Machine.</b><br>by H. G. Wells</p>
          </div>
      </div>
    </div>
  </div>
</div>
        
    </body>
</html>
