<?php
get_header();



if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
		//
	} // end while
} // end if



//
//
//
// Bible Verse
$argsthechurch = array(
	'p' => 194,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$bible_verse_text_de = get_field(bible_verse_text_de);
$bible_verse_reference_de = get_field(bible_verse_reference_de);
//
$bible_verse_text_en = get_field(bible_verse_text_en);
$bible_verse_reference_en = get_field(bible_verse_reference_en);
//
$bible_verse_text_es = get_field(bible_verse_text_es);
$bible_verse_reference_es = get_field(bible_verse_reference_es);

endwhile;
wp_reset_query();




//
//
//
// The Church
$argsthechurch = array(
	'p' => 13,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$the_church_text_de = get_field(the_church_text_de);
$the_church_agenda_de = get_field(the_church_agenda_de);
//
$the_church_text_en = get_field(the_church_text_en);
$the_church_agenda_en = get_field(the_church_agenda_en);
//
$the_church_text_es = get_field(the_church_text_es);
$the_church_agenda_es = get_field(the_church_agenda_es);

endwhile;
wp_reset_query();


//
//
//
// Small Groups
$argsthechurch = array(
	'p' => 16,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$small_groups_image_01 = get_field(small_groups_image_01);
$small_groups_image_02 = get_field(small_groups_image_02);
$small_groups_image_03 = get_field(small_groups_image_03);
$small_groups_image_04 = get_field(small_groups_image_04);
$small_groups_image_05 = get_field(small_groups_image_05);
$small_groups_image_06 = get_field(small_groups_image_06);
//
//
//
$small_groups_title_de_01 = get_field(small_groups_title_de_01);
$small_groups_title_de_02 = get_field(small_groups_title_de_02);
$small_groups_title_de_03 = get_field(small_groups_title_de_03);
$small_groups_title_de_04 = get_field(small_groups_title_de_04);
$small_groups_title_de_05 = get_field(small_groups_title_de_05);
$small_groups_title_de_06 = get_field(small_groups_title_de_06);
//
$small_groups_text_de_01 = get_field(small_groups_text_de_01);
$small_groups_text_de_02 = get_field(small_groups_text_de_02);
$small_groups_text_de_03 = get_field(small_groups_text_de_03);
$small_groups_text_de_04 = get_field(small_groups_text_de_04);
$small_groups_text_de_05 = get_field(small_groups_text_de_05);
$small_groups_text_de_06 = get_field(small_groups_text_de_06);
//
//
//
$small_groups_title_en_01 = get_field(small_groups_title_en_01);
$small_groups_title_en_02 = get_field(small_groups_title_en_02);
$small_groups_title_en_03 = get_field(small_groups_title_en_03);
$small_groups_title_en_04 = get_field(small_groups_title_en_04);
$small_groups_title_en_05 = get_field(small_groups_title_en_05);
$small_groups_title_en_06 = get_field(small_groups_title_en_06);
//
$small_groups_text_en_01 = get_field(small_groups_text_en_01);
$small_groups_text_en_02 = get_field(small_groups_text_en_02);
$small_groups_text_en_03 = get_field(small_groups_text_en_03);
$small_groups_text_en_04 = get_field(small_groups_text_en_04);
$small_groups_text_en_05 = get_field(small_groups_text_en_05);
$small_groups_text_en_06 = get_field(small_groups_text_en_06);
//
//
//
$small_groups_title_es_01 = get_field(small_groups_title_es_01);
$small_groups_title_es_02 = get_field(small_groups_title_es_02);
$small_groups_title_es_03 = get_field(small_groups_title_es_03);
$small_groups_title_es_04 = get_field(small_groups_title_es_04);
$small_groups_title_es_05 = get_field(small_groups_title_es_05);
$small_groups_title_es_06 = get_field(small_groups_title_es_06);
//
$small_groups_text_es_01 = get_field(small_groups_text_es_01);
$small_groups_text_es_02 = get_field(small_groups_text_es_02);
$small_groups_text_es_03 = get_field(small_groups_text_es_03);
$small_groups_text_es_04 = get_field(small_groups_text_es_04);
$small_groups_text_es_05 = get_field(small_groups_text_es_05);
$small_groups_text_es_06 = get_field(small_groups_text_es_06);


endwhile;
wp_reset_query();







//
//
//
// About US
$argsthechurch = array(
	'p' => 18,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$about_us_image = get_field(about_us_image);
$about_us_text_de = get_field(about_us_text_de);
$about_us_text_en = get_field(about_us_text_en);
$about_us_text_es = get_field(about_us_text_es);

endwhile;
wp_reset_query();





//
//
//
// Where We Are
$argsthechurch = array(
	'p' => 20,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$where_text_de = get_field(where_text_de);
$where_text_en = get_field(where_text_en);
$where_text_es = get_field(where_text_es);

endwhile;
wp_reset_query();




//
//
//
// Donation
$argsthechurch = array(
	'p' => 23,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$donation_image = get_field(donation_image);
$donation_text_de = get_field(donation_text_de);
$donation_text_en = get_field(donation_text_en);
$donation_text_es = get_field(donation_text_es);

endwhile;
wp_reset_query();




//
//
//
// Contact
$argsthechurch = array(
	'p' => 25,
	'post_type' => 'pty_interface'
);
$thechurch = new WP_Query( $argsthechurch );
while ($thechurch->have_posts()) : $thechurch->the_post();

$contact_image_michael = get_field(contact_image_michael);
$contact_email_michael = get_field(contact_email_michael);
$contact_image_tobi = get_field(contact_image_tobi);
$contact_email_tobi = get_field(contact_email_tobi);
//
$contact_text_michael_de = get_field(contact_text_michael_de);
$contact_text_michael_en = get_field(contact_text_michael_en);
$contact_text_michael_es = get_field(contact_text_michael_es);
//
$contact_text_tobi_de = get_field(contact_text_tobi_de);
$contact_text_tobi_en = get_field(contact_text_tobi_en);
$contact_text_tobi_es = get_field(contact_text_tobi_es);

endwhile;
wp_reset_query();


?>





<section id="intro" class="intro site-section">
	<div class="intro-wraper large-width-wrapper">
		<ul id="main-slider">

			<?php
			//
			//
			//
			// Slider
			$argsthechurch = array(
				'post_type' => 'pty_slider'
			);
			$thechurch = new WP_Query( $argsthechurch );
			while ($thechurch->have_posts()) : $thechurch->the_post();

				echo '<li>';

				if(get_field(with_link)) {
					echo '<a href="' . get_field(slider_link) . '">';
				}

				echo '<img src="' . get_field(slider_image) . '" />';

				if (get_field(with_content_box)) {
					echo '<div class="slider-content">';

					echo '<p class="slider-content-title">';
					echo '<span class="translated-content lang-de">' . get_field(slider_title_de) . '</span>';
					echo '<span class="translated-content lang-en">' . get_field(slider_title_en) . '</span>';
					echo '<span class="translated-content lang-es">' . get_field(slider_title_es) . '</span>';
					echo '</p>';

					echo '<p class="slider-content-subtitle">';
					echo '<span class="translated-content lang-de">' . get_field(slider_subtext_de) . '</span>';
					echo '<span class="translated-content lang-en">' . get_field(slider_subtext_en) . '</span>';
					echo '<span class="translated-content lang-es">' . get_field(slider_subtext_es) . '</span>';
					echo '</p>';

					echo '</div>';
				}

				if(get_field(with_link)) {
					echo '</a>';
				}

				echo '</li>';

			endwhile;
			wp_reset_query();
			?>


		</ul>
	</div>
</section>







<section id="bibleverse" class="smallgroups site-section">
	<div class="smallgroups-wraper default-width-wrapper">

		<div class="bibleverse">
			<h3 class="bibleverse-text">
				<span class="translated-content lang-de"><?php echo $bible_verse_text_de; ?></span>
				<span class="translated-content lang-en"><?php echo $bible_verse_text_en; ?></span>
				<span class="translated-content lang-es"><?php echo $bible_verse_text_es; ?></span>
			</h3>
			<p class="bibleverse-name">
				<span class="translated-content lang-de"><?php echo $bible_verse_reference_de; ?></span>
				<span class="translated-content lang-en"><?php echo $bible_verse_reference_en; ?></span>
				<span class="translated-content lang-es"><?php echo $bible_verse_reference_es; ?></span>
			</p>
		</div>

	</div>
</section>







<article id="service" class="service site-section">
	<div class="service-wraper default-width-wrapper">
		<h2 class="section-title">
			<span class="translated-content lang-de">Die Kirche</span>
			<span class="translated-content lang-en">The Church</span>
			<span class="translated-content lang-es">La Iglesia</span>
		</h2>

		<div class="col-wrapper">
			<div class="col-70">
				<span class="translated-content lang-de">
					<?php echo $the_church_text_de; ?>
				</span>
				<span class="translated-content lang-en">
					<?php echo $the_church_text_en; ?>
				</span>
				<span class="translated-content lang-es">
					<?php echo $the_church_text_es; ?>
				</span>


			</div>
			<div class="col-30">

				<span class="translated-content lang-de">
					<p class="bold center list-services-title">
						Nächste Dienste:
					</p>
				</span>
				<span class="translated-content lang-en">
					<p class="bold center list-services-title">
						Next services:
					</p>
				</span>
				<span class="translated-content lang-es">
					<p class="bold center list-services-title">
						Próximos servicios:
					</p>
				</span>


				<span class="translated-content lang-de">
					<?php echo $the_church_agenda_de; ?>
				</span>
				<span class="translated-content lang-en">
					<?php echo $the_church_agenda_en; ?>
				</span>
				<span class="translated-content lang-es">
					<?php echo $the_church_agenda_es; ?>
				</span>


			</div>
		</div>


	</div>
</article>





<section id="smallgroups" class="smallgroups site-section">
	<div class="smallgroups-wraper default-width-wrapper">
		<h3 class="section-title">
			<span class="translated-content lang-de">Kleine Gruppen</span>
			<span class="translated-content lang-en">Small groups</span>
			<span class="translated-content lang-es">Pequeños grupos</span>
		</h3>

		<div class="col-wrapper smallgroups-col">




			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_01; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_01; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_01; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_01; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_01; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_01; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_01; ?></span>
				</p>
			</div>



			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_02; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_02; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_02; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_02; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_02; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_02; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_02; ?></span>
				</p>
			</div>




			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_03; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_03; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_03; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_03; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_03; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_03; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_03; ?></span>
				</p>
			</div>




			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_04; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_04; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_04; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_04; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_04; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_04; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_04; ?></span>
				</p>
			</div>



			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_05; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_05; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_05; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_05; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_05; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_05; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_05; ?></span>
				</p>
			</div>




			<div class="col-33 smallgroups-wraper-item">
				<img class="smallgroups-image" src="<?php echo $small_groups_image_06; ?>" />
				<h4 class="smallgroups-subtitle bold center">
					<span class="translated-content lang-de"><?php echo $small_groups_title_de_06; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_title_en_06; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_title_es_06; ?></span>
				</h4>
				<p class="center">
					<span class="translated-content lang-de"><?php echo $small_groups_text_de_06; ?></span>
					<span class="translated-content lang-en"><?php echo $small_groups_text_en_06; ?></span>
					<span class="translated-content lang-es"><?php echo $small_groups_text_es_06; ?></span>
				</p>
			</div>



		</div>


	</div>

</section>





<section id="salvationplan" class="salvationplan site-section">
	<div class="salvationplan-wraper default-width-wrapper">
		<h3 class="section-title">
			<span class="translated-content lang-de">Die schönste Geschichte aller Zeiten</span>
			<span class="translated-content lang-en">The most beautiful story of all time</span>
			<span class="translated-content lang-es">La historia más bella de todos los tiempos</span>
		</h3>

		<div class="home-story-cards-wrapper">
			<ul id="home-story-cards">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_01.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_02.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_03.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_04.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_05.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_06.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_07.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/content/salvationplan_08.jpg" />
				</li>
			</ul>
		</div>





	</div>
</section>





<section id="about" class="about site-section">
	<div class="about-wraper default-width-wrapper">
		<h3 class="section-title">
			<span class="translated-content lang-de">Über uns</span>
			<span class="translated-content lang-en">About Us</span>
			<span class="translated-content lang-es">Quem Somos</span>
		</h3>

		<div class="col-wrapper">
			<div class="col-40">
				<div class="team-pic">
					<img src="<?php echo $about_us_image; ?>" alt="Photo of the people from church together." />
				</div>
			</div>
			<div class="col-60">
				<span class="translated-content lang-de">
					<?php echo $about_us_text_de; ?>
				</span>
				<span class="translated-content lang-en">
					<?php echo $about_us_text_en; ?>
				</span>
				<span class="translated-content lang-es">
					<?php echo $about_us_text_es; ?>
				</span>


			</div>
		</div>
	</div>
</section>





<section id="map" class="map site-section">
	<div class="map-wraper default-width-wrapper">
		<h3 class="section-title">
			<span class="translated-content lang-de">Wo wir sind</span>
			<span class="translated-content lang-en">Where We Are</span>
			<span class="translated-content lang-es">Donde Estamos</span>
		</h3>




		<span class="translated-content lang-de">
			<?php echo $where_text_de; ?>
		</span>
		<span class="translated-content lang-en">
			<?php echo $where_text_en; ?>
		</span>
		<span class="translated-content lang-es">
			<?php echo $where_text_es; ?>
		</span>


		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.801308415156!2d13.746272616039654!3d51.07521777956647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4709cf18ff8cb4b7%3A0xb35e246613952106!2sFichtenstra%C3%9Fe+2%2C+01097+Dresden!5e0!3m2!1spt-BR!2sde!4v1511969730433" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
</section>







<section id="donation" class="donation site-section">
	<div class="contact-wraper default-width-wrapper">

		<h3 class="section-title">
			<span class="translated-content lang-de">Spenden</span>
			<span class="translated-content lang-en">Donation</span>
			<span class="translated-content lang-es">Donación</span>
		</h3>

		<div class="col-wrapper">
			<div class="col-60">
				<img class="contact-photo" src="<?php echo $donation_image; ?>" alt="Photo of a bible and some books together"/>
			</div>
			<div class="col-40 donation-wraper-text">
				<span class="translated-content lang-de">
					<?php echo $donation_text_de; ?>
				</span>
				<span class="translated-content lang-en">
					<?php echo $donation_text_en; ?>
				</span>
				<span class="translated-content lang-es">
					<?php echo $donation_text_es; ?>
				</span>
			</div>
		</div>

	</div>
</section>








<section id="contact" class="contact site-section">
	<div class="contact-wraper default-width-wrapper">
		<h3 class="section-title">
			<span class="translated-content lang-de">Kontakt</span>
			<span class="translated-content lang-en">Contact</span>
			<span class="translated-content lang-es">Contacto</span>
		</h3>


		<div class="col-wrapper">
			<div class="col-50 contact-infoitem">
				<img class="contact-photo" src="<?php echo $contact_image_michael; ?>" alt="Photo Michael Schuber"/>
				<p class="contact-text">
					<span class="translated-content lang-de"><?php echo $contact_text_michael_de; ?></span>
					<span class="translated-content lang-en"><?php echo $contact_text_michael_en; ?></span>
					<span class="translated-content lang-es"><?php echo $contact_text_michael_es; ?></span>
					<a class="contact-link" href="mailto:<?php echo $contact_email_michael; ?>"><?php echo $contact_email_michael; ?></a>
				</p>


			</div>
			<div class="col-50 contact-infoitem">
				<img class="contact-photo" src="<?php echo $contact_image_tobi; ?>" alt="Photo Tobias and Nathalia"/>
				<p class="contact-text">
					<span class="translated-content lang-de"><?php echo $contact_text_tobi_de; ?></span>
					<span class="translated-content lang-en"><?php echo $contact_text_tobi_en; ?></span>
					<span class="translated-content lang-es"><?php echo $contact_text_tobi_es; ?></span>
					<a class="contact-link" href="mailto:<?php echo $contact_email_tobi; ?>"><?php echo $contact_email_tobi; ?></a>
				</p>
			</div>
		</div>



	</div>
</section>


<?php
get_footer();
?>
