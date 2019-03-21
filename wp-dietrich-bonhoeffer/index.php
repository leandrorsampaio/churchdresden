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



?>







		<section id="intro" class="intro site-section">
			<div class="intro-wraper default-width-wrapper">







				<div class="slider">



					<div>
						<img src="<?php bloginfo('template_url'); ?>content/slider_1.jpg" />

						<div class="slider-item title">
							<div class="bibleverse">
								<div class="bibleverse-text">
									<span class="translated-content lang-de">Kommt zu mir, ihr alle, die ihr euch plagt und von eurer Last fast erdrückt werdet; ich werde sie euch abnehmen.</span>
									<span class="translated-content lang-en">Come to me, all you who are weary and burdened, and I will give you rest.</span>
									<span class="translated-content lang-es">Vengan a mí todos ustedes que están cansados y agobiados, y yo les daré descanso.</span>
								</div>
								<div class="bibleverse-name">
									<span class="translated-content lang-de">Jesus</span>
									<span class="translated-content lang-en">Jesus</span>
									<span class="translated-content lang-es">Jesus</span>
								</div>
							</div>
						</div>


					</div>

					<img src="<?php bloginfo('template_url'); ?>content/slider_4.jpg" />
					<img src="<?php bloginfo('template_url'); ?>content/slider_7.jpg" />
					<img src="<?php bloginfo('template_url'); ?>content/slider_6.jpg" />

				</div>




			</div>
		</section>












<?php

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
		'p' => 13,
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
		'p' => 13,
		'post_type' => 'pty_interface'
		);
	$thechurch = new WP_Query( $argsthechurch );
	while ($thechurch->have_posts()) : $thechurch->the_post();

		$about_us_image_de = get_field(about_us_image_de);
		$about_us_text_de = get_field(about_us_text_de);
		//
		$about_us_image_en = get_field(about_us_image_en);
		$about_us_text_en = get_field(about_us_text_en);
		//
		$about_us_image_es = get_field(about_us_image_es);
		$about_us_text_es = get_field(about_us_text_es);

	endwhile;
	wp_reset_query();





	//
	//
	//
	// Where We Are
	$argsthechurch = array(
		'p' => 13,
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
	// Donate
	$argsthechurch = array(
		'p' => 13,
		'post_type' => 'pty_interface'
		);
	$thechurch = new WP_Query( $argsthechurch );
	while ($thechurch->have_posts()) : $thechurch->the_post();

		$donation_image_de = get_field(donation_image_de);
		$donation_text_de = get_field(donation_text_de);
		//
		$donation_image_en = get_field(donation_image_en);
		$donation_text_en = get_field(donation_text_en);
		//
		$donation_text_es = get_field(donation_image_es);
		$donation_text_es = get_field(donation_text_es);

	endwhile;
	wp_reset_query();




	//
	//
	//
	// Contact
	$argsthechurch = array(
		'p' => 13,
		'post_type' => 'pty_interface'
		);
	$thechurch = new WP_Query( $argsthechurch );
	while ($thechurch->have_posts()) : $thechurch->the_post();

		$contact_image_michael = get_field(contact_image_michael);
		$contact_email_michael = get_field(contact_email_michael);
		$contact_image_tobi = get_field(contact_image_tobi);
		$contact_email_tobi = get_field(contact_email_tobi);
		//
		$contact_text_de = get_field(contact_text_de);
		$contact_text_en = get_field(contact_text_en);
		$contact_text_es = get_field(contact_text_es);

	endwhile;
	wp_reset_query();


?>






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
						<img class="smallgroups-image" src="images/smallgroups-english.jpg" />
						<h4 class="smallgroups-subtitle bold center">
							English & German Smallgroup
						</h4>
						<p class="center">
							Jeden Freitag 18:30Uhr am Fichtensraße 2 (Deutsch & English)
						</p>
					</div>



					<div class="col-33 smallgroups-wraper-item">
						<img class="smallgroups-image" src="images/smallgroups-baby.jpg" />
						<h4 class="smallgroups-subtitle bold center">
							Mama-Papa-Kind
						</h4>
						<p class="center">
								jeden Montag, 9:45 Uhr am Fichtenstr. 2 (Deutsch)
						</p>
					</div>




					<div class="col-33 smallgroups-wraper-item">
						<img class="smallgroups-image" src="images/smallgroups-spanish.jpg" />

						<h4 class="smallgroups-subtitle bold center">
							Grupo de Oración
						</h4>
						<p class="center">
							Alle zwei Wochen (Donnerstag) am Bischofsweg 72/74 - Zschommler/Martinez (Español)
						</p>

					</div>




					<div class="col-33 smallgroups-wraper-item">
						<img class="smallgroups-image" src="images/smallgroups-young.jpg" />
						<h4 class="smallgroups-subtitle bold center">
							Youth Bibelstudy
						</h4>
						<p class="center">
							Mittwoch 17:30Uhr - Wolfsgasse Internat 2. Etage (Deutsch & English & Español)
						</p>
					</div>






					<div class="col-33 smallgroups-wraper-item">
						<img class="smallgroups-image" src="images/smallgroups-young.jpg" />
						<h4 class="smallgroups-subtitle bold center">
							Youth Bibelstudy
						</h4>
						<p class="center">
							Mittwoch 17:30Uhr - Wolfsgasse Internat 2. Etage (Deutsch & English & Español)
						</p>
					</div>




					<div class="col-33 smallgroups-wraper-item">
						<img class="smallgroups-image" src="images/smallgroups-chillout.jpg" />

						<h4 class="smallgroups-subtitle bold center">
							Chill Out Time
						</h4>
						<span class="translated-content lang-de">
							<p class="center">
								Ab und zu ein cooles Event in der Stadt. (Alle Sprachen)
							</p>
						</span>
						<span class="translated-content lang-en">
							<p class="center">
								From time to time some cool event in the city. (All languages)
							</p>
						</span>
						<span class="translated-content lang-es">
							<p class="center">
								De vez en cuando algún evento genial en la ciudad. (Todos los idiomas)
							</p>
						</span>







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



				<div class="slider2">
					<img src="content/salvationplan_01.jpg" />
					<img src="content/salvationplan_02.jpg" />
					<img src="content/salvationplan_03.jpg" />
					<img src="content/salvationplan_04.jpg" />
					<img src="content/salvationplan_05.jpg" />
					<img src="content/salvationplan_06.jpg" />
					<img src="content/salvationplan_07.jpg" />
					<img src="content/salvationplan_08.jpg" />
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
							<img src="images/AboutUs.jpg" alt="Photo of the people from church together." />
						</div>
					</div>
					<div class="col-60">
						<span class="translated-content lang-de">
							<p>
								Wir sind fast normale junge Menschen. Nur das wir erlebt haben, dass Gott kein philosophischer  Gedanke oder Energie ist, sondern ein Gegenüber mit dem wir in einer direkten Beziehung leben können.
							</p>
							<p>
								Das ist zwar  "nur" Glauben, aber es  hat unser Leben verändert. Wir erleben wie Gott mit seiner Kraft direkt in unser Leben eingreift und durch uns in  der  Welt wirkt. Wir wollen dich von keiner  Ideologie überzeugen, sondern dir die Möglichkeit geben die Wahrheit von Jesus zu erleben,  durch dessen Kraft du von Ängsten, Verletzungen, Süchten und sonstigen Belastungen frei werden kannst.
							</p>
							<p class="bold">
								Bist du kein Gläubiger? Mach dir keine Sorgen, du bist willkommen!
							</p>
						</span>
						<span class="translated-content lang-en">
							<p>
								We are pretty ordinary young people. But God is not only a philosophical idea or a vague concept to us, but someone who is longing to get to know you and be known by you.
							</p>
							<p>
								Faith has changed our life. Jesus Christ has helped us through difficult times in life and knowing Him is quite fun.
							</p>
							<p class="bold">
								Are you not a believer? Don't worry, you are welcome!
							</p>
						</span>
						<span class="translated-content lang-es">
							<p>
								Somos jóvenes del común, que  vivenciamos a Dios no como un pensamiento filosófico ni una energía, sino como alguien real con el cual  podemos experimentar una relación personal, la cual nos permite ser testigos permanentes, del actuar de Dios con su fuerza a diario en nuestra vida y a través de nosotros en el mundo.
							</p>
							<p>
								Esto es lo que creemos y lo que ha transformado radicalmente nuestras vidas. No intentamos que creas en una ideología, sino que tengas la posibilidad de experimentar la verdad de Jesús en tu vida. Por su poder, puedes ser libre de temores, heridas en tu corazón, adicciones y todas aquellas cosas que hacen tu vida plana y sin sentido.
							</p>
							<p class="bold">
								¿No eres un creyente? No te preocupes, eres bienvenido!
							</p>
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
					<span class="translated-content lang-es">ES Not Translated</span>
				</h3>



				<span class="translated-content lang-de">
					<p>
						Wir sind in Neustadt in der Fichtenstraße 2, 01097 Dresden, neben der Ruine der St. Paulskirche.
					</p>
				</span>
				<span class="translated-content lang-en">
					<p>
						We are in Neustad at Fichtenstraße 2, 01097 Dresden, beside the St. Paulo Church ruins.
					</p>
				</span>
				<span class="translated-content lang-es">
					<p>
						Estamos en Neustadt en la dirección Fichtenstraße 2, 01097 Dresden, al lado de las ruinas de la iglesia St. Pauli.
					</p>
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
						<img class="contact-photo" src="images/bibleoffer.jpg" alt="Photo of a bible and some books together"/>
					</div>
					<div class="col-40 donation-wraper-text">
						<p>
							<b>Glauben Leben e.V.</b>
							<br />IBAN: DE73 8505 0300 0221 1647 07
							<br />BIC: OSDDDE81XXX
							<br />Ostsächsische Sparkasse Dresden
						</p>
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
						<img class="contact-photo" src="images/contact-michael.jpg" alt="Photo Michael Schuber"/>
						<p class="contact-text">
							<span class="translated-content lang-de">Michael Schubert  - Pfarrer</span>
							<span class="translated-content lang-en">Michael Schubert  - Pastor</span>
							<span class="translated-content lang-es">Michael Schubert  - Pastor</span>
							<a class="contact-link" href="mailto:pfarrer.schubert@t-online.de">pfarrer.schubert@t-online.de </a>
						</p>
					</div>
					<div class="col-50 contact-infoitem">
						<img class="contact-photo" src="images/contact-tobias.jpg" alt="Photo Tobias and Nathali"/>
						<p class="contact-text">
							<span class="translated-content lang-de">Tobias und Nathalia Vögler Martinez - Organisation</span>
							<span class="translated-content lang-en">Tobias and Nathalia Vögler Martinez - Organization</span>
							<span class="translated-content lang-es">Tobias y Nathalia Vögler Martinez - Organización</span>
							<a class="contact-link" href="mailto:churchdresden@gmail.com">churchdresden@gmail.com</a>
						</p>
					</div>
				</div>







			</div>
		</section>


		<?php
		get_footer();
		?>
