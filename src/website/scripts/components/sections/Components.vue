<template>
  <section class="main-section paratii-components">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
    </div>
    <div class="paratii-components-content" v-for="(item, index) in content.list" v-bind:class="item.class">
      <div class="main-section-wrapper paratii-components-content-wrapper">
        <div class="paratii-components-entry">
          <h4 class="paratii-components-entry-title">
              <a class="main-social-link" v-bind:href="item.href" target="_blank">
                <svg class="main-social-svg"><use xlink:href="#icon-social-github"></use></svg>
              </a>{{item.title}}</h4>
          <p class="paratii-components-entry-text" v-html="item.text"></p>
        </div>
        <div class="paratii-components-asset" v-bind:class="setLoopClass('paratii-components-asset--',index)" v-bind:style="backgroundImage(item.image)"></div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    props: ['content'],
    components: {
      SectionHeader
    },
    methods: {
      backgroundImage (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      },
      setLoopClass: function (start, end) {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
    }
  }
</script>