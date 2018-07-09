<template>
  <section class="paratii-header">
    <span class="paratii-header-bg"></span>
    <div class="main-section-wrapper">
      <span class="paratii-header-asset" v-bind:style="backgroundImage(content.image)"></span>
      <div class="paratii-header-content">
        <h2
          class="paratii-header-title"
          v-html="content.title"
        ></h2>
        <p
          class="paratii-header-text"
          v-html="content.text"
        ></p>
      </div>
      <div class="paratii-header-subscribe">
        <a
          class="paratii-button paratii-button--red"
          target="_blank"
          v-bind:href="content.buttonAhref"
          v-html="content.buttonA"
        ></a>
        <a
          class="paratii-button-border"
          target="_blank"
          v-bind:href="content.buttonBhref"
          v-html="content.buttonB"
        ></a>
      </div>
      <p class="paratii-header-small" v-html="content.small"></p>
    </div>
  </section>
</template>

<script>
  import mixins from '../../mixins'

  export default {
    name: 'SectionHeader',
    props: ['content'],
    mixins: [mixins],
    methods: {
      backgroundImage (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      }
    }
  }
</script>