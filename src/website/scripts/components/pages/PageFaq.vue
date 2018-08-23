<template>
  <main id="paratii-main" class="paratii-main">
    <SectionFaq v-if="getLanguageContent.sections.faq" v-bind:content="getLanguageContent.sections.faq"></SectionFaq>
  </main>
</template>

<script>
  import SectionFaq from '../sections/SectionFaq'
  import { mapGetters } from 'vuex'

  export default {
    name: 'PageFaq',
    components: {
      SectionFaq
    },
    computed: mapGetters(['getLanguageContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    }
  }
</script>