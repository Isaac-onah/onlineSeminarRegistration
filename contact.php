<?php
$error = NULL;

if (isset($_POST['submit'])){
  //get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
   $seminar = $_POST['seminar'];

  if(strlen($name)<2){
    $error = "Your username must be at least 5 characters";
  }elseif(strlen($email<6)){
      $error = "Type in a valid email address";
  }elseif(strlen($phone<11)){
      $error = "Your username must be at least 11 characters";
  }else{
    //form is valid
    //connect to the database
    $mysqli = NEW MySQLi('localhost', 'root', '', 'imoh');

    //sanitised to strip any character that could be used for sql injection
    $name = $mysqli->real_escape_string($name);
    $email = $mysqli->real_escape_string($email);
    $phone = $mysqli->real_escape_string($phone);
     $seminar = $mysqli->real_escape_string($seminar);

    $insert = $mysqli->query("INSERT INTO accounts(username, email, phone, seminar) VALUES('$name','$email','$phone','$seminar')");

    if($insert){
      $error = "sucessfully registered";
    }else{
      $error = "Something went wrong try again";
    }

  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>D4D Africa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#main">D<span>4</span>D Africa</a></h1>
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="#intro">Join Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  <main id="main">
  <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header::before{content:none;}">
        </div>
        <div class="section-header mt-20">
          <h2>Register For Event</h2>
        </div>
      </div>
    </section>

  
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">
        <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+2348088605625">+234 808 86056 25</a></p>
              <p><a href="tel:+2348138167097">+234 813 81670 97</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p style ="color:black"><a href="mailto:terraafrik@gmail.com">terraafrik@gmail.com</a></p>
            </div>
          </div>

        </div>
        <div class="container">
          <div class="section-header">
            <h2><?php echo $error ?></h2>
          </div>
        </div>
        <div class="form">
          <form method="POST" action="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required/>
              </div>
              <div class="form-group col-md-6">
                <input type="seminar" class="form-control" name="seminar" id="seminar" placeholder="Your seminar" required/>
              </div>
            </div>
            <div class="col-auto">
          <button type="submit"  name="submit">Subscribe</button>
        </div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
