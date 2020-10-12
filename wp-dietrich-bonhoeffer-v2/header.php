<!DOCTYPE html>
<html>
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138047783-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-138047783-1');
    </script>

  <?php wp_head(); ?>
	<meta charset="UTF-8">
	<title><?php echo wp_title('|',true,'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover" />

	<meta name="Description" content="International Protestant Church in Dresden Neustadt. Services in German, English and Spanish. ">
	<meta name="Keywords" content="church, dresden, neustadt, christian, comunity, jesus God, small group, chill out, friendship, lutheran, leben, geminde, pastor, english, spanish, german, welcome, international, cill out, ">


  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
  



	<script src="<?php bloginfo('template_url'); ?>/js/sss.js"></script>

	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style/style.less" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" type="text/javascript"></script>



  <script>
		$(window).on('load', function () {

			$("#main-slider").lightSlider({
        item:1,
        slideMargin:0,
        loop:true,
        speed: 700,
        auto: true,
        pause: 10000
      });
      $("#home-story-cards").lightSlider({
        item:1,
        slideMargin:0,
        controls: false,
        loop:true,
        speed: 500,
        auto: true,
        pause: 3000
      });
		});
	
  </script>


</head>

<body>
	<div class="wrapper">

