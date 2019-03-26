<?php
get_header();



if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();


		$post_title_de = get_the_title();
		$post_content_de = get_the_content_with_formatting();

		// Get translations
		if (get_field(do_you_want_english_translation)) {
			$single_translation_en = true;
			$post_title_en = get_field(post_title_en);
			$post_content_en = get_field(post_content_en);
		} else {
			$single_translation_en = false;
		}
		if (get_field(do_you_want_spanish_translation)) {
			$single_translation_es = true;
			$post_title_es = get_field(post_title_es);
			$post_content_es = get_field(post_content_es);
		} else {
			$single_translation_es = false;
		}



?>





<article class="single site-section">
	<div class="single-wraper default-width-wrapper">





		<div class="col-wrapper">
			<div class="col-80 col-center">






					<h3 class="section-title section-title-center">
						<span class="translated-content lang-de">
							<?php echo $post_title_de; ?>
						</span>
						<span class="translated-content lang-en">
							<?php
							if($single_translation_en == true) {
								echo $post_title_en;
							} else {
								echo $post_title_de;
							}
							?>
						</span>
						<span class="translated-content lang-es">
							<?php
							if($single_translation_es == true) {
								echo $post_title_es;
							} else {
								echo $post_title_de;
							}
							?>
						</span>
					</h3>


					<div class="translation-notice">
						<?php
						if($single_translation_en == false) {
							echo '<span class="translated-content lang-en"><p>Content only available in German</p></span>';
						}
						if($single_translation_es == false) {
							echo '<span class="translated-content lang-es"><p>Contenido solo disponible en alemán</p></span>';
						}
						?>
					</div>



					<div class="site-content-wrapper">
						<div class="translated-content lang-de">
							<?php
								echo $post_content_de;
							?>
						</div>
						<div class="translated-content lang-en">
							<?php
								if($single_translation_en == true) {
									echo $post_content_en;
								} else {
									echo $post_content_de;
								}
							?>
						</div>
						<div class="translated-content lang-es">
							<?php
								if($single_translation_es == true) {
									echo $post_content_es;
								} else {
									echo $post_content_de;
								}
							?>
						</div>
					</div>


			</div>

		</div>




	</div>
</article>





<?php
} // end while
} // end if
get_footer();
?>
