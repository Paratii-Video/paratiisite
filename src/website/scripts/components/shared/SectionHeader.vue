<template>
  <header class="main-section-header" v-bind:class="getMarginClass" v-if="title">
    <h2 class="main-section-title">{{ title }}</h2>
    <h3 class="main-section-subtitle" v-if="subtitle">{{ subtitle }}</h3>
  </header>
</template>

<script>
  export default {
    props: {
      title: {
        type: String
      },
      subtitle: {
        type: String
      },
      nomargin: {
        type: Boolean,
        default: false
      }    
    },
    methods: {
      getMarginClass () {
        return this.nomargin ? 'main-section-header--no-margin' : null;
      }
    }
  }
</script>