<template>
  <main id="paratii-main" class="paratii-main">
    <SectionJoin v-bind:content="getLanguageContent.sections.join"></SectionJoin>
  </main>
</template>

<script>
  import { mapGetters } from 'vuex'
  import SectionJoin from '../sections/SectionJoin'

  export default {
    name: 'PageJoin',
    components: {
      SectionJoin
    },
    computed: mapGetters(['getLanguageContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    }
  }
</script>