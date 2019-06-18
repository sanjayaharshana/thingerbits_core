(function($) {
    $('.form-signup').validate({
        rules : {
            name : {
                required : true,
            }, 
            email : {
                required : true,
                email: true,
            },
            phone : {
                required : true,
            }
        }, 
        messages : {
            name : {
                required : "Please enter Your Name"
            },
            email : {
                required : "Please enter Your Email",
                email : "Please enter a valid email"
            },
            phone : {
                required : "Please enter Your Phone"
            }
        }
    });
    $('.form-contact').validate({
        rules : {
            name : {
                required : true,
            }, 
            email : {
                required : true,
                email: true,
            },
            website : {
                required : true,
            }
        }, 
        messages : {
            name : {
                required : "Please enter Your Name"
            },
            email : {
                required : "Please enter Your Email",
                email : "Please enter a valid email"
            },
            website : {
                required : "Please enter Your Website"
            }
        }
    });
})(jQuery);