(function () {

    'use strict';

    //

    var $event, data_content, data_content_pt, data_content_en;

    data_content_pt = {
        event_splash_presents: '<a class="event-splash-presents-link" href="http://paratii.video/">Paratii</a> apresenta',
        event_button_close: 'Continuar no Around the Block',
        event_splash_title: 'Bem-vindos ao futuro descentralizado',
        event_splash_text: 'A Democracia: passando por um update.',
        event_talk_text: '<strong>Palestras</strong> com',
        event_talk_endtext_text: 'Entre outros',
        event_getin_title: 'Quero um convite',
        event_getin_text: 'É só acessar o link do Sympla e confirmar sua presença.',
        event_getin_button: 'Sympla',
        event_support_title_1: 'Realização',
        event_support_title_2: 'Apoio',
        speeches: [
            "Gabriel Aleixo",
            "Safiri Felix",
            "Laura Vicente",
            "Ian Black",
            "Tia Má",
            "Alê Youssef",
            "Dani Tinório",
            "Dani Klaiman",
            "Ronaldo Lemos",
            "Põe na Roda",
            "Felipe Sant’Ana",
            "Nico Henriques",
            "Paulo Perez",
            "Marcelo Tas",
            "Rosine Kadamani",
            "Um Bipolar"
        ]
    };

    data_content_en = {
        event_splash_presents: '<a class="event-splash-presents-link" href="http://paratii.video/">Paratii</a> presents',
        event_button_close: 'Continue to Around the Block',
        event_splash_title: 'Welcome to the decentralized future',
        event_splash_text: 'Democracy: going through an update',
        event_talk_text: '<strong>Speeches</strong> with',
        event_talk_endtext_text: 'Among others',
        event_getin_title: 'Wanna join us in this event?',
        event_getin_text: 'just access the link and confirm your presence, see you there',
        event_getin_button: 'Event',
        event_support_title_1: 'Presented by',
        event_support_title_2: 'Sponsored by',
        speeches: [
            "Gabriel Aleixo",
            "Safiri Felix",
            "Laura Vicente",
            "Ian Black",
            "Tia Má",
            "Alê Youssef",
            "Dani Tinório",
            "Dani Klaiman",
            "Ronaldo Lemos",
            "Põe na Roda",
            "Felipe Sant’Ana",
            "Nico Henriques",
            "Paulo Perez",
            "Marcelo Tas",
            "Rosine Kadamani",
            "Um Bipolar"
        ]
    };

    data_content = data_content_pt;

    function close () {
        GLOBALS.$body.removeClass('no-scroll');
        $event.remove();

        window.scrollTo(0, 0);
    }

    function init () {

        var vueapp = new Vue({
          el: '#event',
          data: {
            content: data_content_pt
          },
          methods: {
            changeLang: function (lang, event) {
                if (lang === 'pt') {
                    $event.addClass('lang-pt').removeClass('lang-en');
                    this.content = data_content_pt;  
                } else {
                    $event.addClass('lang-en').removeClass('lang-pt');
                    this.content = data_content_en;
                }
            }
          }
        });

        GLOBALS.$body.addClass('no-scroll');
        $event = $('section.event');
        $('button.event-button-close').on('click', close);
    }

    if ($('section.event').length) {
        window.scrollTo(0, 0);
        init();
    }
}());
