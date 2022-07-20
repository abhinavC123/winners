<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team<HTML></title>

  <link href="logo" rel="icon">

  <link href="bootstrap.min.css" rel="stylesheet">

  <link href="style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top" style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Winners</a></h1>
      <h2 class="logo">Welcome <?php echo $_SESSION['username']; ?></h2>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="http://localhost">Home</a></li>
          <li><a class="nav-link scrollto active" href="#hero">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="postjob.php">Post a Job</a></li>
          <li><a class="nav-link scrollto" href="index.php?logout='1'">Logout</a></li>
      </nav>

    </div>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <div class="container">
  <table class="styled-table">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Jobs</th>
                                    <th>Job Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cooking</td>
                                    <td>Cooking food</td>
                                </tr>
                                <tr class="active-row">
                                    <td>2</td>
                                    <td>Baking</td>
                                    <td>Baking Cake</td>
                                </tr>
                            </tbody>
                        </table>
</div>
  </html>