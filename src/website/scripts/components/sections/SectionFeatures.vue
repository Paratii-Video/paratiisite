<template>
  <section class="main-section paratii-features">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="paratii-features-wrapper">
        <div class="paratii-features-asset" v-bind:style="backgroundImage(content.image)"></div>
        <ul class="paratii-features-list">
          <li class="paratii-features-item" v-for="(item, index) in content.list" v-bind:class="setLoopClass('paratii-features-item--', index)" v-bind:index="index" v-bind:key="item.id">
            <p v-html="item.text"></p>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-color-section main-section--color">
      <div class="main-section-wrapper main-color-section-wrapper">
        <p class="main-section-content-text">
          <strong class="main-section-content-title">
            {{content.call.text}}
          </strong> <a class="main-color-section-button paratii-button-border" v-bind:href="content.call.href" target="_blank">{{content.call.button}}</a>
        </p>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    name: 'SectionFeatures',
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