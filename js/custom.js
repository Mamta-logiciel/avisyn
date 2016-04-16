$( document ).ready(function() {
	$('.navbar-nav>li').click(function() {
		$('.navbar-nav>li').removeClass('active');
		$(this).addClass('active');
	})
	var path = window.location.pathname.split("/").pop();

		// Account for home page with empty path
		if ( path == '' ) {
			path = 'index.php';
		}

	var target = $('.navbar-nav>li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');


	/* sticky header */
	// Fixa navbar ao ultrapassa-lo
	var navbar = $('.navbar-default'),
	distance = navbar.offset().top,
	$window = $(window);
	var navbarheight = $('.navbar-default').height();

	$window.scroll(function() {
		if ($window.scrollTop() === 0) {
			navbar.removeClass('navbar-fixed-top');
			$("body").css("padding-top", "0px");
		} else {
			navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
			$("body").css("padding-top", navbarheight + "px");
		}
	});
});