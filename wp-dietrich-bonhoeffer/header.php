<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
	<meta charset="UTF-8">
	<title><?php echo wp_title('|',true,'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover" />

	<meta name="Description" content="International Protestant Church in Dresden Neustadt. Services in German, English and Spanish. ">
	<meta name="Keywords" content="church, dresden, neustadt, christian, comunity, jesus God, small group, chill out, friendship, lutheran, leben, geminde, pastor, english, spanish, german, welcome, international, cill out, ">


  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/lightslider.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Archivo:400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/font-awesome.min.css" />
  <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/style/lightslider.css"/>



	<script src="<?php bloginfo('template_url'); ?>/js/sss.js"></script>

	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style/style.less" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" type="text/javascript"></script>



  <script>
    $(document).ready(function() {
      $("#main-slider").lightSlider({
        adaptiveHeight:false,
        item:1,
        slideMargin:0,
        loop:true,
        speed: 700,
        auto: true,
        pause: 10000
      });
      $("#home-story-cards").lightSlider({
        adaptiveHeight:false,
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





    <nav class="navigation">
			<div class="navigation-wrapper">
				<div class="logo">
					<a href="index.html">
						Church Dresden
					</a>
				</div>
				<div class="menu">
					<span class="menu-mobile-button">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</span>
					<span class="language-mobile-button">
						<i class="fa fa-language" aria-hidden="true"></i>
					</span>
					<ul>
						<li>
							<a href="#service">
								<span class="translated-content lang-de">Die Kirche</span>
								<span class="translated-content lang-en">The Church</span>
								<span class="translated-content lang-es">La Iglesia</span>
							</a>
						</li>

						<li>
							<a href="#smallgroups">
								<span class="translated-content lang-de">Kleine Gruppen</span>
								<span class="translated-content lang-en">Small groups</span>
								<span class="translated-content lang-es">Pequeños grupos</span>
							</a>
						</li>

						<li>
							<a href="#salvationplan">
								<span class="translated-content lang-de">Die Geschichte</span>
								<span class="translated-content lang-en">The History</span>
								<span class="translated-content lang-es">La Historia</span>
							</a>
						</li>

						<li>
							<a href="#about">
								<span class="translated-content lang-de">Über uns</span>
								<span class="translated-content lang-en">About Us</span>
								<span class="translated-content lang-es">Quem Somos</span>
							</a>
						</li>

						<li>
							<a href="#map">
								<span class="translated-content lang-de">Wo wir sind</span>
								<span class="translated-content lang-en">Where we are</span>
								<span class="translated-content lang-es">Donde estamos</span>
							</a>
						</li>

						<li>
							<a href="#donation">
								<span class="translated-content lang-de">Spenden</span>
								<span class="translated-content lang-en">Donation</span>
								<span class="translated-content lang-es">Donación</span>
							</a>
						</li>
						<li>
							<a href="#contact">
								<span class="translated-content lang-de">Kontakt</span>
								<span class="translated-content lang-en">Contact</span>
								<span class="translated-content lang-es">Contacto</span>
							</a>
						</li>
						<li class="facebook">
							<a href="https://www.facebook.com/GiAProjekt/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li class="instagran">
							<a href="https://www.instagram.com/churchdresden/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>







		<nav class="language">
			<div class="language-menu">
				<ul>
					<li class="flag_de">
						<span class="flag_link flag_link_de">
							<img src="<?php bloginfo('template_url'); ?>/img/flag_de.png" alt="Flag German Language"/>
							<span class="text">
								German
							</span>
						</span>
					</li>
					<li class="flag_en">
						<span class="flag_link flag_link_en">
							<img src="<?php bloginfo('template_url'); ?>/img/flag_en.png" alt="Flag English Language"/>
							<span class="text">
								English
							</span>
						</span>
					</li>
					<li class="flag_es">
						<span class="flag_link flag_link_es">
							<img src="<?php bloginfo('template_url'); ?>/img/flag_es.png" alt="Flag Spanish Language"/>
							<span class="text">
								Spanish
							</span>
						</span>
					</li>
				</ul>
			</div>
		</nav>
