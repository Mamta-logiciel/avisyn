// variable to scroll page to particular section
var jump=function(e) {
    if (e){
        e.preventDefault();
        var target = $(this).attr("href");
    }
    else {
        var target = location.hash;
    }

    $('html,body').animate({
        scrollTop: $(target).offset().top + -100
    },500,function() {
       location.hash = target;
    });
}
$('html, body').hide();

$( document ).ready(function() {
    // code to pass Active class to Menus
    var path = window.location.pathname.split("/").pop();
    	// Account for home page with empty path
    	if ( path == '' ) {
    		path = 'index.php';
    	}
    var target = $('.navbar-nav>li a[href="'+path+'"]');
    	// Add active class to target link
    	target.parent().addClass('active');

    
    // code to scroll page to particular section
    $('a[href^=#]').bind("click", jump);

    if (location.hash){
        setTimeout(function() {
            $('html, body').scrollTop(0).show();
            jump();
        }, 0);
    }
    else {
        $('html, body').show();
    }

    //Validate contact form

    $("#contact-form").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        }, 
        showErrors: function(errorMap, errorList) {
            var data = '';
            var len = errorList.length;
            $.each(errorList, function (key, val) {
                if(len == 1) {
                  data += val.element.name +' ';
                  data += "is required field.";
                }
                else if (len == 2) {
                    if(key == len - 1) {
                        data += 'and '+val.element.name +' ';
                        data += "are required fields.";
                    }
                    else {
                        data += val.element.name +' ';
                    }
                }
                else {
                    if(key == len - 1) {
                        data += 'and '+val.element.name +' ';
                        data += "are required fields.";
                    }
                    else {
                        data += val.element.name +', ';
                    }
                }
            });
            $(".all-errors").html(data);
        }
    });

    $("#message").maxlength();

    //for perallex background position
    if ($('div').hasClass('welcome-banner')) {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 100,
            horizontalOffset: 0,
        });  
    }
});