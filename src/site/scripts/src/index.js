;(function () {
  'use strict';
 
  var vueapp, data_content_pt, data_content_en;

  // Lang
  
  data_content_pt = PARATII.lang.pt;
  data_content_en = PARATII.lang.en;

  Vue.config.devtools = true;

  Vue.component('logo', {
    template: '<h1 class="main-title"><a class="main-title-link" href="https://paratii.video/"><svg class="main-title-svg"><use xlink:href="#paratii-logo"></use></svg></a></h1>',
    methods: {
      goTop: function (event) {
        window.scrollTo(0,0);
      }
    }
  });

  Vue.component('section-header', {
    props: {
        title: String,
        subtitle: String,
        nomargin: {
          type: Boolean,
          default: false
        }
    },
    template: '<header class="main-section-header" v-bind:class="getMarginClass" v-if="title"><h2 class="main-section-title">{{ title }}</h2><h3 class="main-section-subtitle" v-if="subtitle">{{ subtitle }}</h3></header>',
    methods: {
      getMarginClass: function () {
        return this.nomargin ? 'main-section-header--no-margin' : null;
      }
    }
  });

  Vue.component('faq', {
    props: ['title', 'text'],
    data: function () {
      return {
        theHeight: '0px',
        isActive: this.title.length ? 0 : 1
      }
    },
    methods: {
      handleActive: function () {
        this.theHeight = this.isActive ? '0px' : this.$refs.text.offsetHeight + 'px';
        this.isActive = !this.isActive;
      }
    },
    computed: {
      faqClass: function () {
        return this.isActive ? 'active' : null;
      }
    },
    template: '<li class="paratii-faq-item" v-bind:class="faqClass"><h4 class="paratii-faq-item-title" @click="handleActive()">{{ title }}<svg class="paratii-faq-item-icon"><use xlink:href="#icon-faq-arrow"/></svg></h4><div class="paratii-faq-item-entry" v-bind:style="{ height: theHeight }"><p class="paratii-faq-item-text" ref="text" v-html="text"></p></div></li>'
  });

  vueapp = new Vue({
    el: '#paratii-main',
    data: {
      nav: false,
      langEn: true,
      content: data_content_en
    },
    mounted: function(e) {
      document.body.classList.add('hide-cover')
    },
    watch: {
      langEn: function (e) {
        this.content = this.langEn ? data_content_en : data_content_pt;
      }
    },
    methods: {
      backgroundImage: function (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      },
      scrollToElement: function (target) {
        var element = document.getElementById(target);
        var y = element.offsetTop;
        window.scrollTo(0, y);
      },
      isRoadmapBetween: function (start, end) {
        return moment().isBetween(start, end);
      },
      isRoadmapPast: function (d) {
        return moment().isAfter(d);
      },
      roadmapClass: function (klass, item) {
        var temp = String;
        if (!this.isRoadmapBetween(item.dateStart, item.dateEnd)) {
          temp = (this.isRoadmapPast(item.dateEnd)) ? 'past' : 'future';
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
  
  if (!document.body.classList.contains('faq')) {  
    window.onscroll = function () {
      navBackground(window.scrollY > (window.innerHeight / 2));
    };

    window.onscroll();
  }

})();
