<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Designsninja">
        <!-- description -->
        <meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
        <!-- keywords -->
        <meta name="keywords" content="creative, revolution slider, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>الرقية الشرعية | طلال آل سليم</title>
        <link rel="shortcut icon" href="assets/images/logo3.jpg">

        <!-- Core Style Sheets -->
        <link rel="stylesheet" href="assets/css/master.css">
        <!-- Responsive Style Sheets -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
        <!-- Revolution Style Sheets -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/main.css">
        
        <style>
            section {
                padding-top: 170px;
                padding-bottom: 120px;
                position: relative;
                z-index: 10;
                background: #f5f5f5;
                overflow: hidden;
                text-align: right;
            }
            .copyright {
                padding: 30px;
                margin: auto;
                text-align: -webkit-right;
                background: #bf0731;
                color: #fff;
            }
            .copyright a {
                    font-weight: 600;
                }
                
            .copyright a:hover {
                color:#fff;
            }    
        </style>
        
    </head>
<body>

<!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <rect x="20" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="30" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.2s" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="40" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.4s" dur="0.6s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

  <!--== Header Start ==-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
 
    <!--== End Top Search ==-->
    <div class="container">
      <!--== Start Atribute Navigation ==-->
   
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="assets/images/logo2.png" alt=""> <img class="logo logo-scrolled" src="assets/images/logo.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm" data-in="fadeIn" data-out="fadeOut">
            <li>
                <a href="#contact">الاتصال</a>
            </li>
            <li> 
                <a href="#now">فك السحر الآن</a>
            </li>

            <li>
                <a href="#cases">حالات شفيت</a>
            </li>
            <li>
                <a href="#about">الشيخ طلال مسفر آل سليم</a>
            </li>
            <li>
              <a href="#Benefits">فوائد الرقية الشرعية</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-lg hidden-md" data-in="fadeIn" data-out="fadeOut">
            <li>
              <a href="#Benefits">فوائد الرقية الشرعية</a>
            </li>  
            <li>
                <a href="#about">الشيخ طلال مسفر آل سليم</a>
            </li> 
             <li>
                <a href="#cases">حالات شفيت</a>
            </li> 
            <li> 
                <a href="#now">فك السحر الآن</a>
            </li>  
            <li>
                <a href="#contact">الاتصال</a>
            </li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->

    


<main id="main" >


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>
                    <?php

                    $email= "talalslaim@yahoo.com";


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
                            mail($email,"roqya shreai Landing Page",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");



                            echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت");
                        }

                    }

                    ?>

                </h3>

        </div>
        </div>
    </section><!-- #contact -->
</main>



<!--==========================
  Footer
============================-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        جميع الحقوق محفوظة &copy; 2018 - تصميم <a href="http://advertizer.sa.com" target="_blank"> شركة أدفرتيزر </a>
                    </div>
                    <div class="text-right col-sm-4">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

   <!--== Wrapper End ==-->
<!--== Javascript Plugins ==-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/smooth-scroll.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="assets/js/master.js"></script>

<!-- Revolution js Files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/revolution.extension.video.min.js"></script> 
<!--== Javascript Plugins End ==-->
</body>
</html>