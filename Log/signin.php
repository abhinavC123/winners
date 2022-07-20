<!DOCTYPE html>
<?php include('server.php') ?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SignIn</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login" >
  <h2 class="active"> Sign in </h2>

  <h2 class="nonactive"><a href="signup.php"> Sign up </a></h2>
  <form method="post" action="signin.php">
   
    <?php include('errors.php'); ?>

    <input type="text" name="username" class="text" name="username">
     <span>username</span>

    <br>
    
    <br>

    <input type="password" name="password" class="text" name="password">
    <span>password</span>
    <br>

    <button class="sign" type="submit"  name="login_user">
      Login
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
