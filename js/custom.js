$( document ).ready(function() {
	var path = window.location.pathname.split("/").pop();

		// Account for home page with empty path
		if ( path == '' ) {
			path = 'index.php';
		}

	var target = $('.navbar-nav>li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});