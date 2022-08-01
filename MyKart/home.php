<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home &bull; MyKart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
      body {
  background-image: url('img/back.png');
      }

#content { color: #f9f9f9;
        font-family: serif, Arial;
        background-color: rgba(0,0,0,0.7);
        max-width: 475px;
        padding: 30px 20px;
        margin-top: 200px;
    }
    
    .navbar{
        background-color: #060606;
         font-style:italic; font-family: sans-serif; font-variant: small-caps;
    }
    
    </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="home.php" class="navbar-brand"><span class="glyphicon glyphicon-book"></span> MyKart</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="admin.php"><span class="glyphicon glyphicon-send"></span> Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a>
                     <ul class="dropdown-menu">
                         <li class="dropdown-header">Contact Us <i class="fa fa-at"></i></li>
                         <li><a><span class="glyphicon glyphicon-phone"></span> Phone : +91 9876543210</a></li>
                        <li><a><span class="glyphicon glyphicon-envelope"></span> Mail : contact@MyKart.in</a></li>
                     </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <div class="container">
          <center> 
            <div id="content">
                <h1><b> Welcome to My Kart </b></h1>
                <h4><i> The World Of Books & Novels  </i></h4>
            </div>
            </center>
      </div>
    </body>
</html>
