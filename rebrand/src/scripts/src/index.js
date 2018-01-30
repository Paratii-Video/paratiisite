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
      langEn: true,
      content: data_content_en
    },
    mounted: function(e) {
      document.body.className = "hide-cover";
    },
    watch: {
      langEn: function (e) {
        if (this.langEn) {
          this.content = data_content_en;
        } else {
          this.content = data_content_pt;  
        }
      }
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
      closeNav: function (e) {
        this.nav = false;
      },
      openNav: function (e) {
        this.nav = true;
      },
      changeLang: function (lang, e) {
        this.langEn = (lang === 'en');
        this.nav = false;
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
