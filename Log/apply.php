<!---php 
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
-->
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
      <!---h2 class="logo">Welcome <?php echo $_SESSION['username']; ?></h2>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="http://localhost">Home</a></li>
          <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="postjob.php">Post a Job</a></li>
          
          <li><a class="nav-link scrollto active" href="apply.php">Apply for a Job</a></li>
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
                    Apply for your job
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
                          <button type="submit" class="sign">Apply</button>
                        </div>
                      
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6" style="background-image:url(data:image/jpeg;base64,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);  background-repeat: no-repeat;
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