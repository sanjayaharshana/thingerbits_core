



(function ($) {

    // USE STRICT

    "use strict";



    try {



        var contactFormWrapper = $('.js-contact-form');


        contactFormWrapper.on('submit', function (e) {
            window.setTimeout(function () {
                var errors = $('.has-error');
                if (errors.length) {
                    $('html, body').animate({scrollTop: 150}, 500);
                }
            }, 0);
            if (!e.isDefaultPrevented()) {
                var url = "includes/contact-form.php";

                $.ajax({

                    type: "POST",

                    url: url,

                    data: $(this).serialize(),

                    success: function (data)

                    {

                        var result = JSON.parse(data);



                        var message = result.message;

                        var type = result.type;

                        if (type === "success") {

                            swal ( "Success" ,  message ,  "success" );

                            contactFormWrapper[0].reset();

                        } else if (type === "danger") {

                            swal ( "Oops" ,  message ,  "error" );

                        }

                    },

                    statusCode: {

                        404: function() {

                            swal ( "Oops" ,  "File Not Found!" ,  "error" );

                        }

                    },

                    error: function (jqXHR, textStatus, errorThrown ) {



                        swal ( "Oops" ,  errorThrown  ,  "error" );

                    }

                });

                return false;
            }

        });



    } catch(err) {

        console.log(err)

    }



})(jQuery);