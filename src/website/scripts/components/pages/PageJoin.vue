<template>
  <main id="main" class="paratii-main">
    <Join v-bind:content="getLanguageContent.sections.join"></Join>
  </main>
</template>

<script>
  import { mapGetters } from 'vuex'
  import Join from '../sections/Join'

  export default {
    name: 'PageUploaders',
    components: {
      Join
    },
    computed: mapGetters(['getLanguageContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    }
  }
</script>