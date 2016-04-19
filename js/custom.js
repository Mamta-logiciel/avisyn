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

    //Validate Email Format
    $.validator.methods.email = function( value, element ) {
        return this.optional( element ) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test( value );
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
        messages: {
            email: {
                required: "This is an required field",        
                email: "Please enter a valid email address."        
            },
            name: {
                required: "This is an required field",        
                minlength: "Name must be at least 3 characters long."  
            },
        }, 
        showErrors: function(errorMap, errorList) {
            var data = '';
            var len = errorList.length;
            $.each(errorList, function (key, val) {
                if(len == 1) {
                    if(val.element.name == 'email') {
                        if(val.method == 'email') {
                            data = "The email format you entered is invalid. Correct format: abc@domain.com.";
                        }
                        else {
                            data = "Email is a required field.";
                        }    
                    }
                    else if(val.element.name == 'name') {
                        if(val.method == 'minlength') {
                            data = "Name must be at least 3 characters long.";
                        }
                        else {
                            data = "Name is a required field.";
                        }    
                    }
                    else {
                        data += val.element.name +' ';
                        data += "is a required field.";
                    }
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

    // $("#message").maxlength();
    $("#message").textareaCounter();

    //for parallex background position
    if ($('div').hasClass('welcome-banner')) {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 100,
            horizontalOffset: 0,
        });  
    }
});