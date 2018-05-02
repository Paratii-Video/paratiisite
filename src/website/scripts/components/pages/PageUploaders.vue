<template>
  <main id="main" class="paratii-main">
    <UploadersForm v-bind:content="getLanguageContent.sections.uploadersform"></UploadersForm>
  </main>
</template>

<script>
  import UploadersForm from '../sections/UploadersForm'
  import { mapGetters } from 'vuex'

  export default {
    name: 'PageUploaders',
    components: {
      UploadersForm
    },
    computed: mapGetters(['getLanguageContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    },
    destroyed () {
      this.$store.commit('navWhite', false)
    }
  }
</script>