<html>
  <!--php 
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
? --->
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
      <!--<h2 class="logo">Welcome php echo $_SESSION['username'];</h2>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="http://localhost">Home</a></li>
          <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>
          <li><a class="nav-link scrollto active" href="#hero">Post a Job</a></li>
          <li><a class="nav-link scrollto" href="apply.php">Apply for a Job</a></li>
          <li><a class="nav-link scrollto" href="index.php?logout='1'">Logout</a></li>
      </nav>

    </div>
  </header>
  <div>
    <div><div><div><br><br><br><br><br>
       
<!-- ======= Posst JOb section ======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-mf">
          <div id="contact" class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="title-box-2">
                  <h5 class="title-left">
                    Post your Job
                  </h5>
                </div>
                <div>
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Job name" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Job Description" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" placeholder="Additional Messages" required></textarea>
                        </div>
                      </div>
                      
                      <div class="col-md-12 text-center">
                          <button type="submit" class="sign">Post the Job</button>
                        </div>
                      
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6" style="background-image:url(https://www.betterteam.com/images/betterteam-free-job-posting-sites-5877x3918-20210222.jpg?crop=4:3,smart&width=1200&dpr=2);  background-repeat: no-repeat;
              background-size: 100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section><!-- End Contact Section -->
              </html>
        </div>
</div>
</div></div></div></div>

  </html>