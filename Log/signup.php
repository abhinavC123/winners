<!DOCTYPE html>
<?php include('server.php') ?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SignUp</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
  <h2 class="nonactive"><a href="signin.php"> sign in</a> </h2>

  <h2 class="active"> sign up </h2>
  <form method="post" action="signup.php">
   
  <?php include('errors.php'); ?>

    <input type="text" class="text" name="username">
     <span>username</span>

    <br>
    
    <br>

    <input type="password" class="text" name="password_1">
    <span>password</span>
    <br>
    <br>
    
    <input type="password" class="text" name="password_2">
    <span>Confirm Password</span>

    <button class="sign" type="submit" name="reg_user">
      Register
    </button>

    <button class="sign" type="submit" href="index.php" >
      Home
    </button>

    <hr>

    <a class="reset" href="#">Forgot Password?</a>
  </form>

</div>
</body>
</html>
