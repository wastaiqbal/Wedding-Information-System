<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/app-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/<?= $css;  ?>.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/<?= $responsive;  ?>.css">

    <!-- Braderkuy Code -->
        <!-- Bootstrap -->
      	<link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/bootstrap/bootstrap.min.css" type="text/css" media="screen" />
        <!-- Pace -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/preloader.css"  media="screen">
        <!-- Flexslider -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/flexslider/flexslider.css" type="text/css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/animate/animate.css" type="text/css">       
        <!-- Countdown -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/countdown/jquery.countdown.css" type="text/css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/magnific-popup/magnific-popup.css" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/owlcarousel/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/owlcarousel/owl.theme.css" type="text/css">
        <!-- Icon -->
        <link rel="stylesheet" href="<?= base_url();  ?>assets/home/css/fonts/fontello/css/fontello.css" type="text/css" media="screen" />
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <!-- Theme CSS -->
    	  <link href="<?= base_url();  ?>assets/home/css/style.css" rel="stylesheet" media="screen">
    <!-- Braderkuy Code -->

    <link
      rel="shortcut icon"
      href="<?= base_url(); ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>"
      type="image/x-icon"
    />

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/2baad1d54e.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="<?= base_url();  ?>assets/icofont/icofont.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/lightbox2-2.11.1/dist/css/lightbox.css">

    <title><?= $title ?></title>
  </head>
  <body>

      <!--PRELOADER-->
      <div id="preloader">
        
        <div class="alignment">
            <div class="v-align center-middle"> 
              
                  <div id="heart-on-center" class="spinner-animation"><i class="de-icon-heart"></i></div>
                   
              </div>
          </div>
          
      </div>
      <!--END of PRELOADER-->

  <?php
  $setting = $this->db->get('settings')->row_array();
  $dateNow = date('Y-m-d H:i');
  $dateDB = $setting['promo_time'];
  $dateDBNew = str_replace("T"," ",$dateDB);
  if($dateNow >= $dateDBNew){
    $this->db->set('promo', 0);
    $this->db->update('settings');
  }
  ?>