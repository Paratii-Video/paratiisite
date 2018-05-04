(function () {

    'use strict';

    //

    function init () {
        var $form1, $form2, $email, $who, $why, enable, email, message, url, validate, who, why;

        GLOBALS.$subscribe = $('.subscribe');

        if ($('form.subscribe-form-01').length) subscribe();
        if ($('form.subscribe-form-02').length) suggest();

        function block () {
            enable = false;
            GLOBALS.$subscribe.addClass('wait');
        }

        function unblock () {
            enable = true;
            GLOBALS.$subscribe.removeClass('wait');
        }

        function send (e) {
            var $form;

            $form = $(e.target);
            
            // e.preventDefault();
            
            if (enable) {
                if ($form.hasClass('subscribe-form-01')) {
                    email = $email.val();
                    validate = GLOBALS.methods.validate.email(email);
                    message = $email.data('alert');
                    url = $form.attr('action')+'?email=' + email;
                } else {
                    who = $who.val();
                    why = $why.val();
                    validate = who.length > 2 && GLOBALS.methods.validate.email(why);
                    message = $who.data('alert') || $why.data('alert');
                    url = $form.attr('action')+'?who=' + who + '&why=' + why;
                }

                if (validate) {

                } else {
                    e.preventDefault();
                    alert(message);
                }
            } else {
                e.preventDefault();
            }
        }

        function subscribe () {
            $form1 = $('form.subscribe-form-01');
            $email = $form1.find('input[name="EMAIL"]');

            $form1.on('submit', send);
        }

        function suggest () {
            $form2 = $('form.subscribe-form-02 ');
            $who = $form2.find('input.who');
            $why = $form2.find('input.why');

            $form2.on('submit', send);
        }

        unblock();
    }

    if ($('section.subscribe').length) {
        init();
    }
}());
