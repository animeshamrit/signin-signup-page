<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet">
    <style>
        body{
            background:url('images/3Jz1MKq-mount-everest-wallpaper.jpg');
            background-size:cover;background-position:center;background-attachment:fixed;
            background-repeat: no-repeat;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-default" style="border-bottom: 2px solid rgb(138, 132, 132);">
        <a class="navbar-brand"  style="text-align:left; color:white;font-family:'Saira Stencil One', cursive;font-size:30px;" href="#"><u>RELY-LABS</u></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                  <a class="nav-link"   style="font-family:algerian;text-align:right; color:white" href="login.php"><i>Login</i> </a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link"   style="font-family:algerian;text-align:right; color:white;"href="signup.php"><i>Sign up</i> </a>
              </li>
              </ul>
          </div>
      </nav>
      <center><h1 style="margin-top:50px;color:white;font-family:algerian;"><i>SIGN UP</i></h1></center>	
	<center><div style="position:relative;top:100px;text-align:left;margin-left:60px;">
        <?php
        session_start();
        if($_SESSION['exist']==1)
        {
            echo '<p style="color:red;">USERNAME ALREADY EXIST!!</p>';
        }
        else if($_SESSION['length']==1)
        {
            echo '<p style="color:red;">Your password must have atleast 8 characters.</p>';
        }
        ?>
		<form action="registration.php" method="POST">
            <label for="name" style="font-family:'Stardos Stencil', cursive;color:white;font-size:20px;">Name:</label><br>
			<input type="text" name="name" id="name" size="30" placeholder="Enter your name" style="border-radius:5px;border:2 px solid black;margin-bottom:10px;" required></br>
			<label for="username" style="font-family:'Stardos Stencil', cursive;color:white;font-size:20px;">Username:</label><br>
			<input type="email" name="user" id="username" size="30" placeholder="Enter your email-id" style="border-radius:5px;border:2 px solid black;margin-bottom:10px;" required></br>
			<label for="password" style="font-family:'Stardos Stencil', cursive;color:white;font-size:20px;">Password:</label></br>
			<input type="password" name="password" id="password" size="30" placeholder="Enter your password" style="border-radius:5px;border:2 px solid black;margin-bottom:20px;" required></br>
			<button type="submit" class="btn btn-danger" name="register">Register</button>
		</form>
	</div></center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>