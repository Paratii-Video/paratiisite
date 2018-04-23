<template>
  <main id="paratii-main" class="paratii-main">
    <Faq v-bind:content="getLanguageContent.sections.faq"></Faq>
  </main>
</template>

<script>
  import Faq from '../sections/Faq'
  import { mapGetters } from 'vuex'

  export default {
    name: 'PageFaq',
    components: {
      Faq
    },
    computed: mapGetters(['getLanguageContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    }
  }
</script>