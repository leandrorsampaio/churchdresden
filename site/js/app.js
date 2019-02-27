function smoothScroll() {
	// Select all links with hashes
	$('a[href*="#"]')
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function(event) {
		// On-page links
		if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
			&&
			location.hostname == this.hostname
		) {
			// Figure out element to scroll to
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 800, function() {
					// Callback after animation
					// Must change focus!
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) { // Checking if the target was focused
						return false;
					} else {
						$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
						$target.focus(); // Set focus again
					};
				});
			}
		}
	});
}




function sectionSize() {

	//Vars
	var windowsize = $(window).height();
	var windowsizepx = windowsize + 'px';

	// change height
	$('.intro').css('height', windowsizepx);
}



function menuMobile() {

	// Menu Mobile on click
	$('.menu-mobile-button').on('click', function () {
		$('.menu').toggleClass('active');
	});

}

function languageMenuMobile() {

	// Language Menu Mobile on click
	$('.language-mobile-button').on('click', function () {
		$('.language').toggleClass('active');
		$('.language-mobile-button').toggleClass('active');
	});

}



function languageStart() {
	$('.wrapper').addClass('language_de');
	$('.flag_link_de').addClass('active');
}


function languageSelection() {

	// DE
	$('.flag_link_de').on('click', function () {
		$('.flag_link_de').addClass('active');
		$('.flag_link_en').removeClass('active');
		$('.flag_link_es').removeClass('active');
		$('.flag_link_ar').removeClass('active');
		$('.flag_link_pt').removeClass('active');
		//
		$('.wrapper').addClass('language_de');
		$('.wrapper').removeClass('language_en');
		$('.wrapper').removeClass('language_es');
		$('.wrapper').removeClass('language_ar');
		$('.wrapper').removeClass('language_pt');
	});

	// EN
	$('.flag_link_en').on('click', function () {
		$('.flag_link_de').removeClass('active');
		$('.flag_link_en').addClass('active');
		$('.flag_link_es').removeClass('active');
		$('.flag_link_ar').removeClass('active');
		$('.flag_link_pt').removeClass('active');
		//
		$('.wrapper').removeClass('language_de');
		$('.wrapper').addClass('language_en');
		$('.wrapper').removeClass('language_es');
		$('.wrapper').removeClass('language_ar');
		$('.wrapper').removeClass('language_pt');
	});

	// ES
	$('.flag_link_es').on('click', function () {
		$('.flag_link_de').removeClass('active');
		$('.flag_link_en').removeClass('active');
		$('.flag_link_es').addClass('active');
		$('.flag_link_ar').removeClass('active');
		$('.flag_link_pt').removeClass('active');
		//
		$('.wrapper').removeClass('language_de');
		$('.wrapper').removeClass('language_en');
		$('.wrapper').addClass('language_es');
		$('.wrapper').removeClass('language_ar');
		$('.wrapper').removeClass('language_pt');
	});

	// AR
	$('.flag_link_ar').on('click', function () {
		$('.flag_link_de').removeClass('active');
		$('.flag_link_en').removeClass('active');
		$('.flag_link_es').removeClass('active');
		$('.flag_link_ar').addClass('active');
		$('.flag_link_pt').removeClass('active');
		//
		$('.wrapper').removeClass('language_de');
		$('.wrapper').removeClass('language_en');
		$('.wrapper').removeClass('language_es');
		$('.wrapper').addClass('language_ar');
		$('.wrapper').removeClass('language_pt');
	});

	// PT
	$('.flag_link_pt').on('click', function () {
		$('.flag_link_de').removeClass('active');
		$('.flag_link_en').removeClass('active');
		$('.flag_link_es').removeClass('active');
		$('.flag_link_ar').removeClass('active');
		$('.flag_link_pt').addClass('active');
		//
		$('.wrapper').removeClass('language_de');
		$('.wrapper').removeClass('language_en');
		$('.wrapper').removeClass('language_es');
		$('.wrapper').removeClass('language_ar');
		$('.wrapper').addClass('language_pt');
	});

}







// Run on load
$(window).on('load', function () {
	//sectionSize();
	smoothScroll();
	menuMobile();
	languageMenuMobile();
	languageStart();
	languageSelection();
});

// Run on resize
//$(window).on('resize', function () {
	//sectionSize();
//});
