<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet">
    <style>
        body{
            background:url('images/GULMouM-mount-everest-wallpaper.jpg');
            background-size:cover;background-position:center;background-attachment:fixed;
            background-repeat: no-repeat;
            overflow: hidden;
        }
        .login
        {
            margin:20px;
            margin-left:10px;
            height:600px;
            width:350px;
            transition: box-shadow .3s;
            border-radius:10px;
            background: rgba(248, 236, 236, 0.9); 
        }
        .login:hover {
         box-shadow: 10px 20px 21px rgba(10, 10, 10, 0.966); 
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
                <li class="nav-item active">
                <a class="nav-link"   style="font-family:algerian;text-align:right; color:white" href="login.php"><i>Login</i> </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link"   style="font-family:algerian;text-align:right; color:white;"href="signup1.php"><i>Sign up</i> </a>
            </li>
            </ul>
	    </div>
	</nav>
    <center>
        <div class="login">
        <img src="https://anistudy.com/login/img/icon_user.png" alt="userlogin" style="border-radius: 50%; height:120px;
        width:120px;position:relative;margin-top:15%;"><br>
        <?php 
        session_start();
        $_SESSION['G']=0;
        $_SESSION['exist']=0;
        $_SESSION['length']=0;
        if($_SESSION['login']==1)
        print '<p style="color:red;margin:10px;">EITHER USERNAME OR PASSWORD IS WRONG!!</p>';
        ?>
        <form action="checklogin.php" method='POST'>
            <label  for="user" style="font-family:'Stardos Stencil', cursive;color:black;font-size:25px;margin-top:100px;">USERNAME</label><br>
            <input  type="text" name="username" id="user" placeholder="Enter your email-id" size=30 style="border-radius:5px;border:2 px solid black;margin:20px;margin-top:-10px;" required><br>
            <label  for="passw" style="font-family:'Stardos Stencil', cursive;color:black;font-size:25px;margin-top:20px;">PASSWORD</label><br>
            <input  type="password" name="password" id="passw" placeholder="Enter your password" size=30 style="border-radius:5px;border:2 px solid black;margin:20px;margin-top:-10px;"required><br>
            <button  type="submit" class="btn btn-success" name="register"><i>LOGIN</i></button><br>
            <a href="#" style="position:relative;top:20px;">forgot your password?</a><br>
            <a href="#"style="position:relative;top:20px;">Help</a><br>
        </form>
        </div>
    </center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>