<?php

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
    else $halaman = "index";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Panca Jaya</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="template/css/isotope.css" media="screen" />
  <link rel="stylesheet" href="template/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="template/css/bootstrap.css">
  <link rel="stylesheet" href="template/css/bootstrap-theme.css">
  <link rel="stylesheet" href="template/css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="template/skin/default.css">
  <script src="template/jquery.js"></script>

  <!-- =======================================================
    Theme Name: Amoeba
    Theme URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:120px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
        <h1><a class="navbar-brand" href="index.html" data-0="line-height:80px;" data-300="line-height:50px;">Panca Jaya
					</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?halaman=penyewaan">Pemesanan</a></li>
          <li><a href="index.php?halaman=cek_proses">Cek Proses</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <?php
    if($halaman=='index')
      include 'home.php';

    elseif($halaman=='penyewaan')
      include 'penyewaan.php';
    
    elseif($halaman=='cek_proses')
      include 'proses.php';
  ?>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; 2020</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="template/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="template/js/jquery.js"></script>
  <script src="template/js/jquery.easing.1.3.js"></script>
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/jquery.isotope.min.js"></script>
  <script src="template/js/jquery.nicescroll.min.js"></script>
  <script src="template/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="template/js/skrollr.min.js"></script>
  <script src="template/js/jquery.scrollTo.js"></script>
  <script src="template/js/jquery.localScroll.js"></script>
  <script src="template/js/stellar.js"></script>
  <script src="template/js/jquery.appear.js"></script>
  <script src="template/js/main.js"></script>
  <script src="template/contactform/contactform.js"></script>
</body>

</html>
