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

			

		</ul>
	</div>
</section>







<?php
get_footer();
?>
