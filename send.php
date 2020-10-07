<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="portfolio">
  <meta name="author" content="Alrehany">
  <title>Taha Rehany web designer</title>
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">Al-Rehany</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Header Nav End -->

<style>
    body {
        text-align: center;
    }
    h3 {
        direction:rtl;
        line-height:1.8;
    }
    .copyright {
        position: absolute;
        width: 100%;
        bottom: 0;
    }
    #main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<!-- /menubar -->
<main id="main">
    <section>
        <div class="container">
            <header class="section-header">
                <h3>
                <?php
                $email= "ryhanytaha@gmail.com";

                if (!empty($_POST)){

                    if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                        echo("لم تقم بتعبئة جميع الخانات <br>");

                    }
                    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if(!preg_match($regex, $_POST['email'])){
                        echo("بريد خاطئ");

                    }
                    else{
                        $message  = "الاسم :\n{$_POST["name"]}\n";
                        $message .= "التليفون :\n{$_POST["tel"]}\n";
                        $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                        $message .= "الرسالة :\n{$_POST["message"]}\n";
                        $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                        $message = stripslashes($message);
                        $message = wordwrap($message, 70);
                        mail($email,"client SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                        echo("Your message has been received");
                    }
                }
                ?>
                </h3>
            </header>
        </div>
    </section><!-- #contact -->
</main>

<!-- Footer -->

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Alrehany 2019</small>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/freelancer.js"></script>

</body>

</html>
