;(function () {
  'use strict';
 
  var vueapp, data_content_pt, data_content_en;

  // Lang
  
  data_content_pt = PARATII.lang.pt;
  data_content_en = PARATII.lang.en;

  vueapp = new Vue({
    el: '#paratii-main',
    data: {
      nav: false,
      content: data_content_en
    },
    mounted: function(e) {
      document.body.className = "hide-cover";
    },
    methods: {
      backgroundImage: function (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      },
      isRoadmapBetween: function (start, end) {
        return moment().isBetween(start, end);
      },
      isRoadmapPast: function (d) {
        return moment().isBefore(d);
      },
      roadmapClass: function (klass, item) {
        var temp = String;
        if (!this.isRoadmapBetween(item.dateStart, item.dateEnd)) {
          temp = (this.isRoadmapPast(item.dataEnd)) ? 'past' : 'future';
          return klass + temp;
        }
      },
      setLoopClass: function (start, end) {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
      openCloseNav: function (e) {
        this.nav = !this.nav;
      },
      changeLang: function (lang, e) {
          // if (lang === 'pt') {
          //     $event.addClass('lang-pt').removeClass('lang-en');
          //     this.content = data_content_pt;  
          // } else {
          //     $event.addClass('lang-en').removeClass('lang-pt');
          //     this.content = data_content_en;
          // }
      }
    }
  });

  // scroll

  function navBackground (setColor) {
    if (setColor) {
      document.body.classList.add('out-top')
    } else {
      document.body.classList.remove('out-top')
    }
  }

  window.onscroll = function (event) {
    navBackground(window.scrollY > (window.innerHeight / 2));
  };

  navBackground(window.scrollY > (window.innerHeight / 2));
})();
